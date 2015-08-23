<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class CountryController extends Controller
{

    public function index($query = null)
    {   

        $country = \App\Country::paginate(10)->toArray();

        $returnData = array(
            'result' => $country,
            'meta' => []
        );

       return \Response::json($returnData, 200);


       // $responseArray = [
       //          'errors'=>$errors,
       //          'message'=>$message,
       //          'result' => $data
       //      ];


       //  return \Response::json(
                
       //          $responseArray,
       //           $code
       //  );
    }

}