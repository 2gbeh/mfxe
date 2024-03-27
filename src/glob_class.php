<?PHP
class Main
{	
	public static function del_user ($mysqli, $id) {
		$tb = 'credit';
		sql_delete($mysqli, $tb, 'user_id', $id);
		
		$tb = 'debit';
		sql_delete($mysqli, $tb, 'user_id', $id);
	}
	
	public static function del_credit ($mysqli, $id) {
		$tb = 'credit';
		$row = sql_select_id($mysqli, $tb, $id);
		$user_id = $row['user_id'];
		
		$tb = 'debit';
		sql_delete($mysqli, $tb, 'user_id', $user_id);
	}	
	
	public static function del_debit ($mysqli, $id) {
		$tb = 'debit';
		$row = sql_select_id($mysqli, $tb, $id);
		$user_id = $row['user_id'];
		$amt = $row['amt'];
		
		$tb = 'credit';
		$row = sql_select_one($mysqli, $tb, 'user_id', $user_id);
		$bal = $row['bal'];
		
		$bal += $amt;
		$new_post = array('bal'=>$bal);
		sql_update($mysqli, $tb, $new_post, 'user_id', $user_id);
	}		
	
	public static function bio ($mysqli, $id) {
		$tb = 'user';				
		$arr = array();		
		$row = sql_select_id($mysqli, $tb, $id);
		$str = ucwords($row['surname'].', '.$row['names']).' ('.$row['gender'].') - '.$row['mobile'];		
		return $str;
	}
		
	public static function bios ($mysqli) {
		$tb = 'user';		
		$arr = array();		
		$db_res = sql_select_all($mysqli, $tb);
		foreach ($db_res as $row) {
			$id = $row['ID'];
			$arr[$id] = ucwords($row['surname'].', '.$row['names']).' ('.$row['gender'].') - '.$row['mobile'];
		}
		asort($arr);
		return $arr;
	}
		
	public static function prt ($p, $r, $t) {
		$obj = new stdClass();
		$obj->p = $p;
		$obj->r = $r;
		$obj->t = $t;
		$obj->i = $i = ($p * $r * $t) / 100;
		$obj->a = $a = $p + $i;
		$obj->emi = $i / $t;
		return $obj;
	}
	
	public static function mature ($d, $t) {
		$e = explode('-', $d);
		$mktime = mktime(0,0,0, $e[1], $e[2], $e[0]);
		$strtotime = strtotime('+'.$t . ' months', $mktime);
		$strtotime = strtotime('+2 days', $strtotime);		
		$to = date('Y-m-d', $strtotime);
		
		$d1 = date_create(date());
		$d2 = date_create($to);
		$df = date_diff($d1, $d2);
		
		$obj = new stdClass();
		$obj->s = $d;		
		$obj->m = $to;
		$obj->is = $df <= 0;
		return $obj;
	}
	
	public static function credit ($post) {
		$prt = self::prt($post['p'], $post['r'], $post['t']);
		return $prt->a;
	}			
	
	public static function debit ($mysqli, $post) {
		$tb = 'credit';
		$tb_2 = 'debit';		
	
		// get balance
		$row = sql_select_one($mysqli, $tb, 'user_id', $post['user_id']);
		$bal = $row['bal'] - $post['amt'];

		// set balance
		$new_post = array('bal' => $bal);
		sql_update($mysqli, $tb_2, $new_post, 'user_id', $post['user_id']);	
				
		return $bal;
	}
	
	public static function payouts ($mysqli) {
		$tb = 'credit';		
		$tb_2 = 'debit';
		$tb_3 = 'user';
		
		$sql_stmt = 'SELECT * FROM `'.$tb.'` WHERE bal > 0 AND MONTH(reg_date) != '.date('m').' AND YEAR(reg_date) != '.date('y');
		$row = sql_query($mysqli, $sql_stmt);
		if (is_array($row))
		{ 
			$arr = array();
			$i = 0;
			foreach ($row as $key => $assoc) 
			{
				$ID = $assoc['user_id'];		
				
				$row_2 = sql_select($mysqli, $tb_2, 'user_id', $ID);
				$row_2_size = count($row_2);
				$row_2_date_arr = array();
				foreach ($row_2 as $row_2_assoc) {
					$sub = substr($row_2_assoc['reg_date'],0,7);
					array_push($row_2_date_arr, $sub);
				}
								
				//var_dump($row_2_date_arr);
				if (! in_array(date('Y-m'), $row_2_date_arr)) 
				{
					$arr[$i]['id'] = $ID;
					$arr[$i]['bal'] = $assoc['bal'];
									 
					$row_3 = sql_select_id($mysqli, $tb_3, $ID);
					$arr[$i]['bank'] = $row_3['bank'];
					$arr[$i]['acct_name'] = $row_3['acct_name'];
					$arr[$i]['acct_no'] = $row_3['acct_no'];
					
					$prt = self::prt($assoc['p'], $assoc['r'], $assoc['t']);
					$arr[$i]['emi'] = $prt->emi;
					$arr[$i]['fin'] = false;
					if ($row_2_size + 1 >= $assoc['t']) {
						$arr[$i]['emi'] = $prt->p + $prt->emi;
						$arr[$i]['fin'] = true;
					}
					
					$e = explode('-', substr($assoc['reg_date'],0,10));
					$mktime = mktime(0,0,0, $e[1], $e[2], $e[0]);
					$strtotime = strtotime('+2 days', $mktime);
					$day = date('d', $strtotime);
					$arr[$i]['due'] = date('Y-m-') . $day;

					$i += 1;
				}
			}
		}
		return $arr;
	}		
}
$new_main = new Main();
?>