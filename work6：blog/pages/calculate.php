<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/calculate.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <nav
      class="navbar navbar-default navbar navbar-fixed-top"
      style="border: none;">
      <div class="container navbar-content">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span aria-hidden="true"
              >MyDesk</span
            >
          </a>
        </div>
     <ul class="nav navbar-nav">
        <li><a href="../index.php">First Page</a></li>
      </ul>
      </div>
    </nav>
    <!-- calculator layer -->
    <div class="slj-wrapper">
        <div class="slj-calculator-box">
          <div class="row">
                <div class="col-xs-12 oprator-button-wrapper">
                  <input type="button" class="slj-result-display-window" id="display" value="0"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-top:0px solid #777;" id="clear">C</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-top:0px solid #777;" id="opreg">+/-</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-top:0px solid #777;" id="persent">%</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-right:1px solid #777;border-top:0px solid #777;" id="truediv">/</button>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number " style="border-top:0px solid #777;" id="seven">7</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number " style="border-top:0px solid #777;" id="eight">8</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number " style="border-top:0px solid #777;" id="nine">9</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-right:1px solid #777;border-top:0px solid #777;" id="multi">x</button>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number " style="border-top:0px solid #777;" id="four">4</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="five">5</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="six">6</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-right:1px solid #777;border-top:0px solid #777;" id="sub">-</button>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="one">1</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="two">2</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="three">3</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-right:1px solid #777;border-top:0px solid #777;" id="add">+</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="zero">0</button>
                </div>
                  <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-number "  style="border-top:0px solid #777;" id="dot">.</button>
                </div>
                <div class="col-xs-3 oprator-button-wrapper">
                  <button type="button" class="slj-operator " style="border-right:1px solid #777;border-top:0px solid #777;" id="equal">=</button>
                </div>
            </div>
        </div>
    </div>
    <script>
       var num = ["0","0"]
       var operator = "add"


       function updateDsiplay(){
        //  console.log(value)
           $("#display").val(parseFloat(num[1]))
       }


       $("#clear").click(()=>{
         num = ["0", "0"]
         operator = "add"
         updateDsiplay()
       })
       
       $("#opreg").click(()=>{
          num[1] =   -parseFloat(num[1]) + "" 
          updateDsiplay()
       })

       $("#present").click(()=>{
         num[1]  =  "" + parseFloat(num[1]) / 100.0
         updateDsiplay()
       })
       
       $("#one").click(()=>{
            num[1] += "1"
            updateDsiplay()
       })

       $("#two").click(()=>{
            num[1] += "2"
            updateDsiplay()
       })

       $("#three").click(()=>{
            num[1] +=  "3"
            updateDsiplay()
       })

       $("#four").click(()=>{
            num[1] += "4"
            updateDsiplay()
       })

       $("#five").click(()=>{
            num[1] +=  "5"
            updateDsiplay()
       })

       $("#six").click(()=>{
            num[1] +=  "6"
            updateDsiplay()
       })

       $("#seven").click(()=>{
            num[1] +=  "7"
            updateDsiplay()
       })       

       $("#eight").click(()=>{
            num[1] +=  "8"
            updateDsiplay()
       })  

       $("#nine").click(()=>{
            num[1] +=  "9"
            updateDsiplay()
       })  

       $("#zero").click(()=>{
            num[1] +=  "0"
            updateDsiplay()
       })  

        $("#dot").click(()=>{
            num[1] += "."
            updateDsiplay()
       })  

       $("#truediv").click(()=>{
           equal()
           operator = "truediv"
       })

        $("#multi").click(()=>{
           equal()
           operator = "multi"
       })

        $("#sub").click(()=>{
           equal()
           operator = "sub"
       })

       
        $("#add").click(()=>{
           equal()
           operator = "add"
       })
                  

       $('#equal').click(()=>{
         equal()
       })

       function equal(){
         let result = 0
        //  console.log(operator)
        //  console.log(operator === 'add')
         switch(operator){
           case 'add':
              result = parseFloat(num[0]) + parseFloat(num[1])
              break;
           case 'truediv':
              try{result = parseFloat(num[0]) / parseFloat(num[1])}
              catch{console.error("divided by zero")}
              break;
           case 'sub':
              result = parseFloat(num[0]) - parseFloat(num[1])
              break;
           case 'multi':
              result = parseFloat(num[0]) * parseFloat(num[1])
              break;
         }
         num[1] = result + ""
         updateDsiplay()
         num[0] = num[1]
         num[1] = "0"
       }
      //  updateDisplay(1)
    </script>
</body>
</html>