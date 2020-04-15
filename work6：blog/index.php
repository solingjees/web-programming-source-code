<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>work6</title>
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
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <script src="./js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- login-modal -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="login-modal"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">user login</h4>
          </div>
          <div class="modal-body">
            <form action="./php/checkLogin.php" method="get" id="loginForm">
              <div class="form-group">
                <label for="exampleInputEmail1">Account</label>
                <input
                  type="email"
                  class="form-control"
                  id="account"
                  placeholder="Email"
                  name="account"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="Password"
                  name="password"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
            <button type="submit" form="loginForm" class="btn btn-primary">
              login
            </button>
          </div>
        </div>
      </div>
    </div>

    <nav
      class="navbar navbar-default navbar navbar-fixed-top"
      style="border: none;"
    >
      <div class="container navbar-content">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <span class="glyphicon glyphicon-leaf" aria-hidden="true"
              >Bootstrap</span
            >
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <button type="submit" class="btn btn-success" >Search</button>
            <?php
            session_start();
            if(!isset($_SESSION["account"])){
            echo "<button
              type='button'
              class='btn btn-primary btn-md'
              data-toggle='modal'
              data-placement='bottom'
              data-target='#loginModal'
              title='please login!'
            >
              Login
            </button>";
            }
            else{
              echo "<span style='color:#777;'>欢迎您,".$_SESSION["account"]."</span>";
              echo "<button
              type='button'
              class='btn btn-primary btn-md'
              data-toggle='modal'
              data-placement='bottom'
              title='log out'
              id='logout'
            >
              log out
            </button>";
            }
            ?>
          </form>
        </div>
      </div>
    </nav>

    <!-- <div class="jumbotron">
        <div class="container">
            <h1>Hello, BootStrap!</h1>
            <p>Bootstrap 是全球最受欢迎的前端组件库，用于开发响应式布局、移动设备优先的 WEB 项目。

                Bootstrap 是一个用于 HTML、CSS 和 JS 开发的开源工具包。利用 Bootstrap 提供的 Sass 变量和混合（mixins）、响应式栅格系统、可扩展的预制组件以及强大的 jQuery
                插件，能够让你快速地开发出产品原型或构建整个 app。</p>
            <p><a class="btn btn-primary btn-lg jumbotron-btn" href="#" role="button">Learn more</a></p>

        </div>
    </div> -->
    <div
      id="carousel-example-generic"
      class="carousel slide"
      data-ride="carousel"
    >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li
          data-target="#carousel-example-generic"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="./images/swiper1.jpg" class="carousel-img" alt="swiper1" />
        </div>
        <div class="item">
          <img src="./images/swiper2.jpg" class="carousel-img" alt="swiper2" />
        </div>
        <div class="item">
          <img src="./images/swiper3.jpg" class="carousel-img" alt="swiper2" />
        </div>
        <div class="item">
          <img src="./images/swiper4.jpg" class="carousel-img" alt="swiper2" />
        </div>
      </div>

      <!-- Controls -->
      <a
        class="left carousel-control"
        href="#carousel-example-generic"
        role="button"
        data-slide="prev"
      >
        <span
          class="glyphicon glyphicon-chevron-left"
          aria-hidden="true"
        ></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="right carousel-control"
        href="#carousel-example-generic"
        role="button"
        data-slide="next"
      >
        <span
          class="glyphicon glyphicon-chevron-right"
          aria-hidden="true"
        ></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Browsers and devices</h3>
          <p>
            Alternative browsers which use the latest version of WebKit, Blink,
            or Gecko, whether directly or via the platform’s web view API, are
            not explicitly supported. However, Bootstrap should (in most cases)
            display and function correctly in these browsers as well. More
            specific support information is provided below. You can find our
            supported range of browsers and their versions in our
            .browserslistrc file
          </p>
          <button type="button" class="btn btn-default">
            View details <span class="button-arrow">>></span>
          </button>
        </div>
        <div class="col-md-4">
          <h3>JavaScript</h3>
          <p>
            Some plugins and CSS components depend on other plugins. If you
            include plugins individually, make sure to check for these
            dependencies in the docs. Also note that all plugins depend on
            jQuery (this means jQuery must be included before the plugin files).
            Consult our package.json to see which versions of jQuery are
            supported. Our dropdowns, popovers and tooltips also depend on
            Popper.js.
          </p>
          <button type="button" class="btn btn-default">
            View details <span class="button-arrow">>></span>
          </button>
        </div>
        <div class="col-md-4">
          <h3>Webpack</h3>
          <p>
            To enjoy the full potential of Bootstrap and customize it to your
            needs, use the source files as a part of your project’s bundling
            process. First, create your own _custom.scss and use it to override
            the built-in custom variables. Then, use your main Sass file to
            import your custom variables, followed by Bootstrap
          </p>
          <button type="button" class="btn btn-default">
            View details <span class="button-arrow">>></span>
          </button>
        </div>
      </div>
      <hr class="line" />
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img src="images/spring1.jpg" alt="spring" />
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img src="images/spring1.jpg" alt="spring" />
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img src="images/spring1.jpg" alt="spring" />
          </div>
        </div>
      </div>
      <hr class="line" />
      <footer>&copy;2020 solingjees</footer>
    </div>
    <script>
      $(function () {
        $('[data-toggle="modal"]').tooltip()
      })
      $("#logout").click(()=>{
        window.location = "php/logout.php"
      })
    </script>
  </body>
</html>
