@extends('layouts.black')

@section('title', 'SCUber577_forget')

@section('style-black')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style>
  .container {
    display: flex;
    width: 80%;
    margin: 0 0 5% 0;
  }

  .container svg {
    display: block;
    width: 10%;
  }

  .input-group {
    width: 90%;
    display: flex;
    flex-direction: column;
    margin: 0 5% 0 5%;
    justify-content: space-between;
  }

  input {
    color: white;
  }

  .button {
    background-color: black;
    color: #fff;
    border: 2px solid #fff;
    padding: 10px 0px;
    font-size: 15px;
    margin: 18px 0;
    text-align: center;
    width: 80%;
  }

  .button:hover {
    background-color: #fff;
    color: #1a1a1a;
  }

  .btn-group {
    display: flex;
    padding: 2%;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }

  .btn-transparent {
    border: none;
    background-color: transparent;
    color: white;
    text-align: left;
    font-size: large;
  }

  @keyframes scu {
    0%, 100% {
      text-shadow: 0 0 20px #fff, 0 0 100px #fff, 0 0 20px #fff;
    }
    50% {
      text-shadow: 0 0 50px #fff, 0 0 150px #fff, 0 0 50px #fff;
      color: red;
    }
  }

  #scu {
    color: aliceblue;
    padding: 10px;
    animation: scu 1.5s ease-in-out infinite alternate;
    margin-top: 100px;
  }
</style>
@endsection

@section('content')
@section('back-link', '/')

@section('content-black')

<div class="row">
  <div class="col s12">
    <div id="center-content">
      <h4>請輸入您的學號</h4>
      <div class="row">
        <div class="col s12">
          <form class="col-sm">
            <!-- 表單內容 -->
            <div class="row">
              <div class="input-field col s12">
                <input id="number" type="text" class="validate">
                <label for="number">學號</label>
              </div>
            </div>
          </form>
          <div class="container">
            <div class="container" style="text-align: center;">
              <a class="waves-effect waves-light btn modal-trigger white black-text" href="#modal1">確定</a>
              <div id="modal1" class="modal bottom-sheet" style="height: 50%; background-color: black; left: 10%; width: 80%;">
                <div class="modal-content">
                  <h5>密碼已發送到您的信箱</h5>
                </div>
                <div class="modal-footer btn-group" style="background-color: black; height:auto; display: flex;">
                  <a href="" class="button modal-close waves-effect">再次寄出</a>
                  <a href="{{url('/home')}}" class="button">回到首頁</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="scu">
  <h1>SCUber<i>577</i></h1>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {
      endingTop: '100%',
      startingTop: '100%',
    });
  });
</script>
@endsection
