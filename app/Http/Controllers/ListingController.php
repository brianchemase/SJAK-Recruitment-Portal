<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //

    public function home()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.home')->with($data);
    }


    public function table()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.table')->with($data);
    }

    public function form()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.forms')->with($data);
    }
    public function formtable()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.formtable')->with($data);
    }


    public function AdvertDetails()
    {


        // $responsibilities = DB::table('job_responsibilities')
        //                ->where('job_id', $jobId)
        //                ->pluck('responsibility');

        $responsibilities="";

        $responsibilities = [
            'Manage day-to-day operations',
            'Oversee project timelines and budgets',
            'Coordinate with cross-functional teams',
            'Develop and implement strategies for growth',
            'Ensure compliance with regulatory requirements',
            'Provide leadership and mentorship to junior staff',
            'Monitor key performance indicators (KPIs)',
            'Prepare and deliver presentations to stakeholders',
            'Identify and mitigate risks',
            'Foster a culture of continuous improvement'
        ];

        $qualifications = [
            'Bachelor\'s degree in Business Administration, Marketing, or related field',
            '5+ years of experience in project management or related roles',
            'Proven leadership and team management skills',
            'Excellent communication and interpersonal skills',
            'Strong analytical and problem-solving abilities',
            'Proficient in Microsoft Office Suite and project management tools (e.g., Jira, Asana)',
            'Knowledge of industry regulations and compliance standards',
            'Ability to multitask and manage competing priorities',
            'Fluent in English (additional languages a plus)',
            'Certifications in project management (e.g., PMP, Scrum Master) are a plus'
        ];


        $contributions="";
        $JobTitle="HR Assistant ";
        $JobLocation="Nairobi, Kenya";
        $JobDescription="Dolor justo tempor duo ipsum accusam rebum gubergren erat. Elitr stet dolor vero clita labore gubergren. Kasd sed ipsum elitr clita rebum ut sea diam tempor. Sadipscing nonumy vero labore invidunt dolor sed, eirmod dolore amet aliquyam consetetur lorem, amet elitr clita et sed consetetur dolore accusam. Vero kasd nonumy justo rebum stet. Ipsum amet sed lorem sea magna. Rebum vero dolores dolores elitr vero dolores magna, stet sea sadipscing stet et. Est voluptua et sanctus at sanctus erat vero sed sed, amet duo no diam clita rebum duo, accusam tempor takimata clita stet nonumy rebum est invidunt stet, dolor.";
        $ResponsibilitiesTitle="Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor";
        $Vacancy="2";
        $PublishedOn="01 Jan, 2045";
        $Deadline="01 Jan, 2045";
        $Salary="Competitive";
        $JobNature="Contract - Full Time";
        
        //$Salary="";


        $contributions="";

        $data=[
            'contributions' => $contributions,
            'JobTitle' => $JobTitle,
            'JobLocation' => $JobLocation,
            'JobDescription' => $JobDescription,
            'ResponsibilitiesTitle' => $ResponsibilitiesTitle,
            'responsibilities' => $responsibilities,
            'qualifications' => $qualifications,
            'contributions' => $contributions,
            'PublishedOn' => $PublishedOn,
            'Vacancy' => $Vacancy,
            'JobNature' => $JobNature,
            'Salary' => $Salary,
            'Deadline' => $Deadline,            

        ];

        return view('jobdetailsdata')->with($data);
    }
}
