<?    header("Content-Type: text/html; charset=utf-8");  
  $str=$_REQUEST['category-name'];

function translit($str)
{
$tr = array(
                              "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
                            "Д"=>"d", "Е"=>"e","Ё"=>"yo","Ж"=>"zh","З"=>"z","И"=>"i",
                            "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
                            "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
                            "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"c","Ч"=>"ch",
                            "Ш"=>"sh","Щ"=>"shh","Ъ"=>"","Ы"=>"yi","Ь"=>"",
                            "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
                            "в"=>"v","г"=>"g","д"=>"d", "е"=>"e","ё"=>"yo","ж"=>"zh",
                            "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
                            "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
                            "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
                            "ц"=>"c","ч"=>"ch","ш"=>"sh","щ"=>"shh","ъ"=>"y",
                            "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya", 
                            " "=> "_","  "=> "_", "   "=> "_", "."=> "", "/"=> "_", "\""=>"", "–"=>"", "&#8211;"=>"", ","=>"",
                             ":"=>"", "("=>"", ")"=>"", "«"=>"", "»"=>"", "&#171;"=>"", "&#187;"=>"", "№"=>"nomer_"
);
return strtr($str,$tr);
};
$tans=translit($str);
echo $tans;   
?>