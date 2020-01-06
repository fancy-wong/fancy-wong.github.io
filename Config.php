 <?php


/*
 * 通常情况下，本类中的所有参数 只需配置一次即可。
 * 
 * 关于云API账号中的APPID，SecretId 与 SecretKey查询方法，可参考：
 * 
 * https://cloud.tencent.com/document/product/441/6203
 * 具体路径为：点控制台右上角您的账号-->选：访问管理-->点左边菜单的：访问秘钥-->API秘钥管理
 */
class Config {

	// -------------- Required. 请登录腾讯云官网控制台获取 ---------------------
	static $SECRET_ID = "AKIDLURBgwEqY3LODqiejcFeplRzIn37PXIo";
	static $SECRET_KEY = "PbXGidJkwsZ2GF6i5D5kALG1bx51j38F";
	static $APPID = "1251061558";

	// --------------- Optional, 请按需修改 ---------------------
	/* 识别引擎 8k_0 or 16k_0 */
	static $ENGINE_MODEL_TYPE = '8k_0';

	//结果返回方式 0：同步返回，拿到全部中间结果， or 1：尾包返回
	static $RES_TYPE = 0;

	// 识别结果文本编码方式 0:UTF-8, 1:GB2312, 2:GBK,3:BIG5
	static $RESULT_TEXT_FORMAT = 0;

	// 语音编码方式 1:wav 4:sp 6:silk
	static $VOICE_FORMAT = 1;
	
	// 语音切片长度 cutlength<200000
	static $CUTLENGTH = 6400;

	public static function verify() {
		if (empty (self :: $SECRET_KEY)) {
			echo "secret_key can not be empty";
			return -1;
		}
		if (empty (self :: $SECRET_ID)) {
			echo "secretid can not be empty";
			return -1;
		}
		if (empty (self :: $APPID)) {
			echo "appid can not be empty";
			return -1;
		}
		if (empty (self :: $ENGINE_MODEL_TYPE) || (self :: $ENGINE_MODEL_TYPE != "8k_0" && self :: $ENGINE_MODEL_TYPE != "16k_0" && self :: $ENGINE_MODEL_TYPE != "16k_en")) {
			echo "engine_model_type is not right";
			return -1;
		}
		if(self :: $RES_TYPE != 0 && self :: $RES_TYPE != 1){
			echo "RES_TYPE ERROR: ".Config :: $RES_TYPE;
			return -1;
		}
		if (self :: $RESULT_TEXT_FORMAT != 0 && self :: $RESULT_TEXT_FORMAT != 1 && self :: $RESULT_TEXT_FORMAT != 2 && self :: $RESULT_TEXT_FORMAT != 3) {
			echo "RESULT_TEXT_FORMAT is not right";
			return -1;
		}
		if (self :: $CUTLENGTH > 200000) {
			echo "CUTLENGTH must < 200000";
			return -1;
		}
		/*echo "Verify finished.";*/
	}
}

Config :: verify();
?>
