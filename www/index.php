<?

// определяем с каким контроллером будем работать 
$controllerName = isset($_GET["controller"]) ? ucfirst($_GET["controller"]) : "Index";
echo "Подключаемый php файл (controller) = " . $controllerName . "<br>";

// определяем с какой функцией будем рвботать 
$actionName = isset($_GET["action"]) ? $_GET["action"] : "index";
echo "Функция формирующа страницу(action) = " . $controllerName . "<br>";
