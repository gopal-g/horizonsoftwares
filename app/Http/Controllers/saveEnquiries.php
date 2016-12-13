<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

class saveEnquiries extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$all 	= Request::all();
        if(!$all){
            return error('No data Input!');
        }
    	
    	$enq = new saveEnquiries();

        $enq->name 		= $all['name'];
        $enq->email 	= $all['email'];
        $enq->phone 	= $all['phone'];
        $enq->ip 		= Request::ip();
        $enq->message 	= $all['body'];
        
        if (!$enq->save()) {
            return error('Could not create a new enquiry!', 'enquire');
        }
        return success('Successfully created an enquiry', 'enquire', $enq);
    }
}
