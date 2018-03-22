# calendar-date
当前时间转换为阴历
### 安装
    composer require calendar-date dev-master

### 实例化对象

    $formatDate = new \Calendar\FormatDate();
### 使用
    $date=$formatDate->convertSolarToLunar(date('Y'),date('m'),date('d'));
### 返回数据
``array(8) { [0]=> int(2017) [1]=> string(6) "腊月" [2]=> string(6) "初七" [3]=> string(6) "丁酉" [4]=> int(13) [5]=> float(7) [6]=> string(3) "鸡" [7]=> int(6) }``
