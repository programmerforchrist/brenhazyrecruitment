<?php

namespace App\Controllers\Jobs;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Job\Job;

class JobsController extends BaseController
{



    public function singleJob($id)  {

        $job = new Job();
        $singleJob = $job->find($id);

        return view('jobs/single-job',compact('singleJob'));
        
    }
}
