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
    <div class="modal fade" id="IntErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        整数部分最长16位
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="DotErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        小数部分最长8位
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="DivideErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        除数不可为0！
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
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
                  <button type="button" class="slj-operator " style="border-top:0px solid #777;" id="clear">AC</button>
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
       var isAC = true

       //显示几号位数据
       function updateDsiplay(seat){
          $("#display").val(parseFloat(num[seat]))
       }

       function exchange(val){
         num[0] = val + ""
         num[1] = "0"
       }

       function exchangeAC(y = false){
         if(y){
           $("#clear").text("AC")
           isAC =true
         }else{
           $("#clear").text("C")
           isAC = false
         }
       }

       //检测数据有效性
       function test(val){
         let arrs  = val.split(".")
         let result = true
        //  console.log(arrs)
         if(arrs[0] !== "" && arrs[0].length >= 15){
              $('#IntErrorModal').modal()
              result = false
         }else if(arrs.length === 2  &&  arrs[1].length > 8){
             $("#DotErrorModal").modal()
             result = false
         }
         return result
       }

       $("#clear").click(()=>{
         if(isAC){
            num = ["0", "0"]
            updateDsiplay(1)
         }else{
            num[1] = "0"
            updateDsiplay(1)
         }
       })
       
       $("#opreg").click(()=>{
          num[1] = -parseFloat(num[1]) + ""
          // console.log(num[1])
          updateDsiplay(1)
       })

       $("#persent").click(()=>{
         num[1]  =  "" + parseFloat(num[1]) / 100.0
         updateDsiplay(1)
       })
       
       $("#one").click(()=>{
          if(!test(num[1]))  return
            num[1] += "1"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#two").click(()=>{
            if( !test(num[1]))  return
            num[1] += "2"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#three").click(()=>{
         if( !test(num[1]))  return
            num[1] += "3"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#four").click(()=>{
          if( !test(num[1]))  return
            num[1] += "4"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#five").click(()=>{
          if( !test(num[1]))  return
            num[1] += "5"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#six").click(()=>{
      if( !test(num[1]))  return
            num[1] += "6"
            updateDsiplay(1)
              exchangeAC()
       })

       $("#seven").click(()=>{
        if( !test(num[1]))  return
            num[1] += "7"
            updateDsiplay(1)
              exchangeAC()
       })       

       $("#eight").click(()=>{
          if( !test(num[1]))  return
            num[1] += "8"
            updateDsiplay(1)
            exchangeAC()
       })  

       $("#nine").click(()=>{
            if( !test(num[1]))  return
            num[1] += "9"
            updateDsiplay(1)
           exchangeAC()   
       })  

       $("#zero").click(()=>{
            if( !test(num[1]))  return
            num[1] += "0"
            updateDsiplay(1)
            exchangeAC()
       })  

        $("#dot").click(()=>{
            num[1] += "."
            updateDsiplay(1)
            exchangeAC()   
       })  

       $("#truediv").click(()=>{
          exchange(equal())
          operator = "truediv"
       })

        $("#multi").click(()=>{
          exchange(equal())
           operator = "multi"

       })

        $("#sub").click(()=>{
          exchange(equal())
           operator = "sub"
       })
       
        $("#add").click(()=>{
           exchange(equal())
           operator = "add"
       })

      //计算结果并显示   
       $('#equal').click(()=>{
         if(operator==="truediv" && parseFloat(num[1]) === 0)
          {
             $("#DivideErrorModal").modal()
          }else{
         num[1] = equal() + ""
         updateDsiplay(1)
         num[0] = "0"
         operator = "add"
         exchangeAC()
          }
       })

       //得出计算结果
       function equal(){
         let result = 0
         switch(operator){
           case 'add':
              result = parseFloat(num[0]) + parseFloat(num[1])
              break;
           case 'truediv':
              if(parseFloat(num[1]) === "0"){
                 return "error!"
              }
              else{
                 result = parseFloat(num[0]) / parseFloat(num[1])
              }
              break;
           case 'sub':
              result = parseFloat(num[0]) - parseFloat(num[1])
              break;
           case 'multi':
              result = parseFloat(num[0]) * parseFloat(num[1])
              break;
         }
         return result
       }
    </script>
</body>
</html>