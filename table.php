<?php
 namespace App\Http\Requests;

 class TagUpdateRequest extends Request
 {

7 /**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */
 public function authorize()
 {
 return true;
 }

17 /**
18 * Get the validation rules that apply to the request.
19 *
20 * @return array
21 */
 public function rules()
 {
 return [
 'title' => 'required',
 'subtitle' => 'required',
'layout' => 'required',
 ];
 }
 }