<?php
/**
*@ param 文件上传类
*@ param PHP198
*@ param 2017.11.14
**/

use Illuminate\Http\Request;
use App\Libray\helper;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
class Upload
{
	private $_allowType;//允许的类型
	private $_allowSize;//允许的大小
	public $_desName;//目标文件名
	private $_desDir;//目标目录
	private $_file;//具体的$_FILES[xxx]
	public $error = null;//存错误
	
	public function __construct($file, $desDir= '/upload/videos/', $allowType=['image/jpeg', 'image/png', ['image/gif']], $allowSize=1024*1024)
	{
		$this->_file = $_FILES[$file];
		$this->_desDir = $desDir;
		$this->_allowType = $allowType;
		$this->_allowSize = $allowSize;
	}
	
	
	/**
	*@param 给外部调用的方法
	*@return string 如果成功，返回目标文件信息，如果失败，返回错误信息
	*
	**/
	public function run()
	{
		
		if($this->isError() && $this->isAllowType() && $this->isAllowSize() && $this->getDesDir()) {
			// echo 'ok';
			$name = $this->getDesInfo();//生成目标文件名
			$this->move();
			return $name;
		} else {
			return $this->error;
		}
	}
	
	
	/**
	*@param 判断错误号
	*@return bool 如果错误不是0，返回false,如果是0，返回true
	*
	*/
	private function isError()
	{
		if ($this->_file['error']) {
			//不判断，直接说有问题
			$this->error = '错误号有问题';
			return false;
		} else {
			return true;
		}
	}
	
	/**
	*@param 判断文件类型是否允许
	*@return bool 
	*
	*/
	private function isAllowType()
	{
		if (in_array($this->_file['type'],$this->_allowType)) {
			return true;
		} else {
			$this->error = '类型有问题';
			return false;
		}
		 // return in_array($this->_file['type'],$this->_allowType);
	}
	
	
	/**
	*@param 判断文件大小是否允许
	*@return bool
	*
	**/
	private function isAllowSize()
	{
		if ($this->_file['size'] > $this->_allowSize) {
			$this->error = '图片太大了';
			return false;
		} else {
			return true;
		}
	}
	
	/**
	*@param 获取文件后缀名，并生成随机的文件名
	*@return void
	**/
	private function getDesInfo()
	{
		//获取文件后缀名
		$ext = '.' .pathinfo($this->_file['name'], PATHINFO_EXTENSION);
		$this->_desName = date('YmdHis') . rand(10000,99999) . $ext;
	}
	
	
	/**
	*@param 确定目标目录
	*@return bool
	*
	**/
	private function getDesDir()
	{
		//检测目录结尾是否有'/'
		if (substr($this->_desDir, -1) != '/') {
			$this->_desDir = $this->_desDir . '/';
		}
		
		//检测目标目录是否存在
		if (!file_exists($this->_desDir)) {
			//如果不存在就创建
			if(mkdir($this->_desDir)) {
				return true;
			} else {
				$this->error = '目标目录创建失败';
				return false;
			}
		} else {
			//目录存在，返回true
			return true;
		}
	}
	
	
	/**
	*@param 移动
	*@return string 
	*
	*/
	private function move()
	{
		if (move_uploaded_file($this->_file['tmp_name'], $this->_desDir . $this->_desName)) {
			return $this->_desName;
		} else {
			$this->error =  '文件上传失败';
			return false;
		}
	}
}
