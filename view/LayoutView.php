<?php


class LayoutView {
  
  public function render($LoggedIn, LoginView $v, DateTimeView $dtv) {

    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $this->renderIsLoggedIn($LoggedIn). '
          
          <div class="container">
              ' . $v->response() . '
              
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
  }
  
  private function renderIsLoggedIn($checker) {
      //$lm = new LogInModel();
 
     
      //var_dump($checker);
      //var_dump($isLoggedIn->isLoggedIn());
      //var_dump($checker);

    if ($checker) {
      return '<h2>Logged in</h2>';
    }
    else {
      return '<h2>Not logged in</h2>';
    }
  }
}
