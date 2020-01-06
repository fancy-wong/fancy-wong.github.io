<?php
require ('RASRsdk.php');

# 1. 先修改好Config.php文件中的配置

# 2. 然后开始调用：
//调用 RASRsdk 中的 sendvoice 函数获得识别结果
$filepath = "test_wav/8k/8k.wav";
$result = sendvoice($filepath, false);
echo "<br>8K Result is: ".$result;


# ---------------------------------------------------------------------
# 3. 若需中途调整参数值，可直接修改，然后继续发请求即可。比如：
Config::$ENGINE_MODEL_TYPE = "16k_0";

$filepath = "test_wav/16k/16k.wav";
$result = sendvoice($filepath, false);
echo "<br>16K Result is: ".$result;

?>
