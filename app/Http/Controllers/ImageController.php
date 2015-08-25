<?php namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Input;
use Redirect;


class ImageController extends BaseController {

	public function getImage() {
		
		if (!Input::hasFile('photo'))
			return \Redirect::back();

	    $file = Input::file('photo');
	    
	    $file->move(public_path().'/uploads', $file->getClientOriginalName());

	    $image = \Image::make(sprintf(public_path().'/uploads/%s', $file->getClientOriginalName()))->resize(120, 120)->save();

	    return Redirect::back();
		// // Make a new response out of the contents of the file
  //       // We refactor this to use the image resize function.
		// // Set the response status code to 200 OK
		// $response = Response::make(
		// 	Image::resize($filename, $size),
		// 	200
		// );

  //       // Set the mime type for the response.
  //       // We now use the Image class for this also.
  //       $response->header(
  //           'content-type',
  //           Image::getMimeType($filename)
  //       );

		// // We return our image here.
		// return $response;
	}

}