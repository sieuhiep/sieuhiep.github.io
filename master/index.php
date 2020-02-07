<?php 

	session_start();
	$mod = (isset($_GET['mod'])) ? $_GET['mod'] : 'Cart';
	$act = (isset($_GET['act'])) ? $_GET['act'] : 'index';

	switch ($mod) {
		case 'Cart':
			
			include_once('controllers/Cartcontroller.php');
			$a = $mod.'controller';
			$mod = new $a();

			switch ($act) {
				case 'index':
					$mod->index();
					break;
				case 'all':
					$mod->all();
					break;	
				case 'iphone':
					$mod->iphone();
					break;	
				case 'samsung':
					$mod->samsung();
					break;	
				case 'nokia':
					$mod->nokia();
					break;
				case 'addcart':
					$mod->addcart();
					break;
				// case 'addmu':
				// 	$mod->addmu();
				// 	break;
				case 'cart':
					$mod->cart();
					break;
				case 'sanpham':
					$mod->sanpham();
					break;
				case 'detail':	
					$mod->detail();
					break;
				case 'delete':
					$mod->delete();
					break;
				case 'them':
					$mod->them();
					break;
				case 'remove':
					$mod->remove();
					break;
				case 'order':
					$mod->order();
					break;
				case 'order_next':
					$mod->order_next();
					break;
				case 'chitiet':
					$mod->chitiet();
					break;
				case 'test':
					$mod->test();
					break;
				case 'destroy':
					$mod->destroy();
					break;
				case 'testAjax':
					$mod->testAjax();
					break;
				case 'search':
					$mod->search();
					break;
			}

			break;
		
		case 'Admin':
			$act = (isset($_GET['act'])) ? $_GET['act'] : 'index';
			include_once('controllers/Admincontroller.php');
			$a = $mod.'controller';
			$mod = new $a();
			switch ($act) {
				case 'index':
					$mod->index();
					break;				
				case 'add':
					$mod->add();
					break;
				case 'adddm':
					$mod->adddm();
					break;
				case 'addtv':
					$mod->addtv();
					break;
				case 'sms':
					$mod->sms();
					break;
				case 'delete':
					$mod->delete();
					break;
				case 'deletedm':
					$mod->deletedm();
					break;
					case 'deletetv':
					$mod->deletetv();
					break;
				case 'update':
					$mod->update();
					break;
				case 'updatedm':
					$mod->updatedm();
					break;
				case 'updatetv':
					$mod->updatetv();
					break;
				case 'login':
					$mod->login();
					break;
				case 'user':
					$mod->user();
					break;
				case 'logout':
					$mod->logout();
					break;
				case 'danhmuc':
					$mod->danhmuc();
					break;
				case 'thanhvien':
					$mod->thanhvien();
					break;
				case 'cthoadon':
					$mod->cthoadon();
					break;
				case 'send_email':
					$mod->send_email();
					break;
				case 'recyclebin':
					$mod->recyclebin();
					break;
				case 'refresh':
					$mod->refresh();
					break;
				case 'deleteRecyclebin':
					$mod->deleteRecyclebin();
					break;
				case 'xoa':
					$mod->xoa();
					break;
				case 'test':
					$mod->test();
					break;
			}
			break;
	}
?>