@extends('layouts.master')

@section('cat')
    Determine Which Cat You Are!
@endsection

@section('content')
    <h3>Which Cat Breed Do You Belong To?</h3>

    <h4>Fill Out the Questions Below to Find Out!  <h4> <br><br>

    <form method='POST' action='/show'>
        {{ csrf_field() }}

        <label for='name'>Enter Your Name:</label>
        <input type='text' name='name' id='name' value='{{ $name or '' }}' required><br><br>

        <label for='catbehavior'>Which Description Applies To You The Most :</label>
        <select name='catbehavior' id='catbehavior'>
             <option value='persian'>Independent but People-pleasing</option>
             <option value='maine'>Friendly Gentle Giant</option>
             <option value='bengal'>Athletic and Nature-loving</option>
             <option value='siamese'>Love to Talk!</option>
             <option value='abyssinian'>Stubborn</option>
             <option value='british'>Independent and introverted</option>
        </select><br><br>

        <label for='catphoto'>Which Photo Appeals To You The Most:</label>

        <div class="cat-selector">

             <input checked="checked" id="maine" type="radio" name="catphoto" value="maine" />
             <label class="cat-selector-cc maine" for="maine"></label>

             <input id="persian" type="radio" name="catphoto" value="persian" />
             <label class="cat-selector-cc persian" for="persian"></label>

             <input id="bengal" type="radio" name="catphoto" value="bengal" />
             <label class="cat-selector-cc bengal" for="bengal"></label>

             <input id="siamese" type="radio" name="catphoto" value="siamese" />
             <label class="cat-selector-cc siamese" for="siamese"></label>

             <input id="abyssinian" type="radio" name="catphoto" value="abyssinian" />
             <label class="cat-selector-cc abyssinian" for="abyssinian"></label>

             <input id="british" type="radio" name="catphoto" value="british" />
             <label class="cat-selector-cc british" for="british"></label>

        </div> <br><br>

        <input type='submit' class='btn btn-primary' value='Click To Determine Which Cat You Are!'>

    </form>










@endsection
