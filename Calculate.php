<?php
namespace johnnylei\calculate;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 17-7-2
 * Time: 下午9:41
 */
class Calculate extends Widget
{
    public function run() {
$initJs = <<<JS
var calculate = new Calculate();
var ACkeyButton = document.getElementsByClassName("ACkeyButton");
ACkeyButton[0].onclick = function() {
    calculate.clean();
};
var deleteNumber = document.getElementById("deleteNumber");
deleteNumber.onclick = function() {
    calculate.deleteNumber();
};
var calculateResult = document.getElementById("calculateResult");
calculateResult.onclick = function () {
    calculate.calculateResult();
};
var keyButton = document.getElementsByClassName("keyButton");
for (var i in keyButton) {
    keyButton[i].onclick = (function(index) {
        return function() {
            calculate.showExpression(keyButton[index].innerHTML);
        };
    })(i);
}
JS;
        CalculateAsset::register($this->view);
        $this->view->registerJs($initJs);
        return '<div id="calculate">  
            <input type="text" id="show" value ="0" readonly>  
            <div id="keyboard">  
                <table>  
                    <tr>  
                        <td class = "ACkeyButton">AC</td>  
                        <td class="keyButton">+</td>  
                        <td class="keyButton">-</td>  
                        <td class="keyButton">*</td>  
                    </tr>  
                    <tr>  
                        <td class="keyButton">1</td>  
                        <td class="keyButton">2</td>  
                        <td class="keyButton">3</td>  
                        <td class="keyButton">/</td>  
                    </tr>  
                    <tr>  
                        <td class="keyButton">4</td>  
                        <td class="keyButton">5</td>  
                        <td class="keyButton">6</td>  
                        <td class="keyButton">(</td>  
                    </tr>  
                    <tr>  
                        <td class="keyButton">7</td>  
                        <td class="keyButton">8</td>  
                        <td class="keyButton">9</td>  
                        <td class="keyButton">)</td>  
                    </tr>
                    <tr>
                        <td class="keyButton">√</td>
                        <td class="keyButton">^</td>
                        <td class="keyButton">^2</td>
                        <td id = "deleteNumber">del</td>
                    </tr>
                    <tr>  
                        <td class="keyButton">0</td>  
                        <td class="keyButton">.</td>  
                        <td id="calculateResult" colspan="2">=</td>
                    </tr>
                </table>  
            </div>  
        </div>';
    }
}