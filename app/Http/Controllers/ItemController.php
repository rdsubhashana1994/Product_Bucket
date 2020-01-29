<?php
namespace App\Http\Controllers;
use Validator;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller {

  /**
   * Created By : 
   * Created At : 29/01/2020
   * Summary : Adds item to the data table
   * @param Request $request
   * @return void
   */
    public function addItem (Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'quantity' => 'required|min:1|numeric',
            'price' => 'required|min:1|numeric',
            [
                'name.required' => 'Item name cannot be empty',
                'name.min:3' => 'Item name should have minimum 3 characters',
                'name.max:50' => 'Item name cannot exceeds 50 characters'
            ]
        ]);

        if ($validator->fails()) {
            return response() -> json(array(
                'success' => false,
                'data' => $validator -> errors() -> all()[0]
            ));
        }

        $item = new Item();
        $item->name = $request->input('name');
        $item->quantity = $request->input('quantity');
        $item->price = $request->input('price');
        $item->save();

        return response()->json(array(
            'success' => true,
            'code' => 201,
            'data' => 'Successful !'
        ));
    }

//    get all items
    public function getItem() {

        $all_items = Item::all();

        if ($all_items) {
            return response()->json(array(
                'success' => true,
                'code'   => 200,
                'data' => $all_items
            ));
        } else {
            return response()->json(array(
                'success' => false,
                'code'   => 404,
                'data' => "No items in the bucket!"
            ));
        }
    }

//    delete an item
    public function deleteItem($id) {
        $item = Item::find($id);
        if (! $item) {
            return response()->json(array(
                'success' => false,
                'code'   => 404,
                'data' => "item not found in the bucket!"
            ));
        } else {
            $item->delete();

            return response()->json(array(
                'success' => true,
                'code'   => 201,
                'data' => $item
            ));
        }
    }

//    edit an item
    public function editItem(Request $request, $id){
        $item = Item::find($id);

        if (! $item) {
            return response()->json(array(
                'success' => false,
                'code'   => 404,
                'data' => "item not found in the bucket!"
            ));
        } else {
            $item->name = $request->input('name');
            $item->quantity = $request->input('quantity');
            $item->price = $request->input('price');

            $item->save();

            return response()->json(array(
                'success' => true,
                'code'   => 200,
                'data' => $item
            ));
        }
    }



}


