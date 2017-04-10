<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
     public function index(Request $request) {


          /* This validates the name data*/
          $this->validate($request, ['name' => 'alpha']);

          $name = $request->input('name');
          $catbehavior = $request->input('catbehavior');
          $catphoto = $request->input('catphoto');

          /* Each behavior and photo are linked to a cat breed.  If the user
          selected behavior and photos are the same, it will obviously be the
          results.   But if there is a tie between the behavior and photo,
          my code will practically randomly pick between the two variables
          (and by extension cat breed) to show as results*/

          if($catbehavior==$catphoto){
               $results=$catbehavior;
          }
          else{
               $randomNumber = rand(0,1);
               if ($randomNumber == 0){
                    $results=$catbehavior;
               }
               else{
                    $results=$catphoto;
               }
          }


          /* Once results variable is determined, the following code will
          retrieve the corresponding breed description */

          if($results=="persian"){
               $breedDescription="The dignified and docile Persian is known for being quiet and sweet. She is an ornament to any home where she can enjoy sitting in a lap—surely her rightful place—being petted by those who are discerning enough to recognize her superior qualities, and playing house with kind children who will gently comb her hair, wheel her around in a baby buggy, then serve her tea at their parties.";
          }elseif ($results=="maine") {
               $breedDescription="The good-natured and affable Maine Coon adapts well to many lifestyles and personalities. He likes being with people and has the habit of following them around, but he isn’t needy. He’s happy to receive attention when you direct it his way, but if you’re busy he’s satisfied to just supervise your doings. Close a door on him and he will wait patiently for you to realize the error of your ways and let him in. He’s not typically a lap cat, but he does like to be near you.";
          }elseif ($results=="bengal") {
               $breedDescription="The Bengal is highly active and highly intelligent. This makes him fun to live with, but he can sometimes be challenging. On the whole, the Bengal is a confident, talkative, friendly cat who is always alert. Nothing escapes his notice. He likes to play games, including fetch, and he’s a whiz at learning tricks. His nimble paws are almost as good as hands, and it’s a good thing he doesn’t have opposable thumbs or he would probably rule the world.";
          }elseif ($results=="abyssinian"){
               $breedDescription="Of all the cat breeds, the Abyssinian is perhaps the one who lives life to the fullest. He climbs higher, jumps farther, plays harder. Nothing escapes the notice of this highly intelligent and inquisitive cat, a quality that makes life with him both endlessly entertaining and continuously challenging.";
          }elseif ($results=="british") {
               $breedDescription="The British Shorthair is mellow and easygoing, making him an excellent family companion. Expect him to follow you around the house during the day, settling nearby wherever you stop. Full of British reserve, the Shorthair has a quiet voice and is an undemanding companion. He doesn’t require a lap, although he loves to sit next to you. Being a big cat, he isn’t fond of being carried around.";
          }else { // by elimination, this has to be siamese
               $breedDescription="Perhaps the most important thing to know about these cats is they are talkative and opinionated. They will tell you exactly what they think, in a loud, raspy voice, and they expect you to pay attention and act on their advice. Siamese cats are extremely fond of their people. They like to be “helpful” and will follow you around and supervise your every move. When you are sitting down, a Siamese will be in your lap, and at night he will be in bed with you, probably under the covers with his head on the pillow.";
          }



          return view('cats.results')->with([
               'name' => $name,
               'results' => $results,
               'breedDescription' => $breedDescription
          ]);

	}

}
