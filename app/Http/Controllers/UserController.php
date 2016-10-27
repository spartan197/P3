<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function create()
    {
            return view('generator.users');
    }

    public function store(Request $request)
    {
            $this->validate($request, [
                'NoOfUsers' => 'required|min:1|max:99|numeric',
            ]);
            $NoOfUsers = $request->input('NoOfUsers');
            $faker = \Faker\Factory::create();

            $usr="";
            $usr.="<center><table>";
            $usr.="<tr>";
            $usr.="<th>Name</th>";
            $usr.="<th>Email</th>";
            $usr.="<th>Phone</th>";
            $usr.="</tr>";
            for ($i = 0; $i < $NoOfUsers; $i++) {
                $usr.= "<tr><td>" . $faker->name . "</td><td>" . $faker->unique()->email . "</td><td>" . $faker->phoneNumber. "</td></tr>";
            }
            $usr.="</table></center>";
            return view('generator.show2')->with(['usr' => $usr]);
    }
}
