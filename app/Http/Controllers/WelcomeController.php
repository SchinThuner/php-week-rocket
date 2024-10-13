<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Chamando método estático da model User
        // Para criar um novo usuário
        // $user = User::query()->create([
        //     "name"=> 'Schindler',
        //     "email"=> 'schindler@email.com',
        //     'password'=> '12345678',
        // ]);

        // Acessando primeiro registro da tabela usuário
        $user = User::find(1);
        // quando usado a forma abaixo cada uma das propriedades é salvada novamente
        // $user->email_verified_at = now();
        // $user->save();
        
        // fillable protege de atualizações em massa permitindo apenas a atualização dos
        // campos criados acima no user
        // $user->update(['email_verified_at' => now()]);
        dd($user->email_verified_at->diffForHumans());

        // return self::class;
        return WelcomeController::class;
        //return view('teste.teste');
    }
    /**
     * Caso de uso de método e não uma classe invoke
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    // public function index(Request $request)
    // {
    //     return view('welcome');
    // }
}
