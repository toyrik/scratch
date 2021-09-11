<?php
/**
 * Простейший шаблонизатор который подставляет текст из массива
 * значений в подготовленные места общего шаблона
 */

// Текст ощего шаблона
$templ = '
    <h1>Здравствуйте {{name}}!</h1>
 <p>Мы рады приветствовать Вас!</p>  
 И всегда готовы помочь Вам в течение всего мероприятия, по организационным вопросам.<br>
 Вами подписан договор №{{contractPrefix}} {{numContract}} от {{timeCreateContract}} г.;<br>
 срок действия с  {{contractStartDate}} г. по  {{contractEndDate}} г.;<br>
 общая стоимость: {{finalContractPrice}} рублей;<br>
 форма оплаты: {{paymentForm}}.<br>
 Пожалуйста прочитайте письмо направленное на Ваш адрес электронной почты: {{email}}<br>
 В случае возникновения трудностей сообщите нам по номеру: 8(800)123-45-67<br>
';

$paymentForm = getPaymentForm();

// Значения для постановки
$arrVal = [
    'timeCreateContract' => '09.10.2021',
    'contractPrefix' => 'C-I-XII',
    'numContract' => 58679,
    'contractStartDate' => '09.10.2021',
    'finalContractPrice' => '16043',
    'paymentForm' => $paymentForm,
    'email' => 'test@mail.com',
    'name' => 'Fido',
    'contractEndDate' => '09.10.2022',
];


function prepareTemplate($template, $values)
{

    // Находим в тексте общего шаблона вхождения для подстановки 
    preg_match_all('/\{\{(.*?)\}\}/', $template, $keys);


    // Сортируем массив значений для использования в функции srt_replase
    $sortedValues = [];
    // перебираем массив ключей
    foreach ($keys[1] as $patternKey) {
        foreach($values as $key => $val){
            // Если в массиве значений есть икомый паттерн и он равен значению из массива ключей - добавляем его значение в отсортированный массив
            if ($key == $patternKey) {
                $sortedValues[] = $val;
            }
        }
    }

    // Подставляем значения в общий шаблон 
    $result = $str = str_replace($keys[0], $sortedValues, $template);
    return $result;

}


function getPaymentForm()
{
    $index = rand(1,3);

    $arrVal = [
        'единовременная выплата наличными средствами',
        'единовременная выплата банковским переводом',
        'рассрочка',
        'привлечение средств по кредитному договору'

    ];

    return $arrVal[$index];
}

$text = prepareTemplate($templ, $arrVal);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Простейший шаблонизатор</title>
</head>
<body>
    <div class="container">
        <p><?=$text;?></p>
        
    </div>    
</body>
</html>