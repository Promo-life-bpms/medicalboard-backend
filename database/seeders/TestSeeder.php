<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Medical;
use App\Models\RoleUser;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        $names = [ 
            'María del Carmen Paredes'
        ];

        $female_names = [
            'Adriana', 'María', 'Elizabeth', 'Ada', 'Alicia', 'Beatriz', 'Claudia', 'Marcela', 'Veronica', 'Sara', 'Gabriela', 'Carla',
            'Penélope', 'Juana', 'Diana', 'Eduardo', 'Sugeily', 'Laura', 'Isabel', 'Luisa', 'Victoria', 'Carmen', 'Sofía', 'Andrea', 
            'Lucía', 'Valeria', 'Paula', 'Daniela', 'Fernanda', 'Mariana', 'Camila', 'Renata', 'Alejandra', 'Ximena', 'Natalia', 
            'Estefanía', 'Gloria', 'Rosa', 'Clara', 'Esther', 'Elena', 'Silvia', 'Viviana', 'Raquel', 'Valentina', 'Marta', 
            'Virginia', 'Marina', 'Ana', 'Margarita', 'Antonia', 'Concepción', 'Nerea', 'Nuria', 'Paloma', 'Susana', 'Rocio', 
            'Rebeca', 'Raquel', 'Raúl', 'Lourdes', 'Isaura', 'Adela', 'Isabel', 'Josefina', 'Ana Maria', 'Joaquina', 'Lorena', 
            'Karina', 'Rosario', 'Belen', 'Almudena', 'Mariluz', 'Rosario', 'Aurora', 'Olga', 'Clotilde', 'Milagros', 'Manuela', 
            'Luciana', 'Valeria', 'Nadia', 'Xiomara', 'Estela', 'Silvina', 'Gisela', 'Yolanda', 'Elvira', 'Candelaria', 
            'Esperanza', 'Gabriela', 'Soledad', 'Graciela', 'Celeste', 'Beatriz', 'Alba', 'Teresa', 'Eulalia', 'Herminia', 
            'Olaya', 'Lourdes', 'Inés', 'Sara', 'Natividad', 'Celia', 'Ramona', 'Anunciación', 'Ofelia', 'Gertrudis', 
            'Apolonia', 'Dámasa', 'Teodora', 'Socorro', 'Encarnación', 'Luz', 'Araceli', 'Gaudalupe', 'Esperanza', 'Pilar', 
            'Consuelo', 'Angélica', 'Griselda', 'Mónica', 'Norma', 'Roxana', 'Yolanda', 'Lilia', 'Rosario', 'Zulema'
        ];
        
        $users = [];
        
        foreach ($names as $name) {
            $random_numbers = rand(01, 20);

            $name_parts = explode(' ', $name);
    
            if (count($name_parts) > 3) {
                $first_name = $name_parts[0] . ' '. $name_parts[1];
                $last_name = implode(' ', array_slice($name_parts, 2));
            } else {
                $first_name = $name_parts[0];
                $last_name = implode(' ', array_slice($name_parts, 1));
            }

            $gender = 'Dr.'; 

            foreach ($female_names as $female_name) {
                if (stripos($first_name, $female_name) !== false) {
                    $gender = 'Dra.'; 
                    break;
                }
            }

            $create_user = new User();
            $create_user->name =$first_name;
            $create_user->lastname =$last_name;
            $create_user->email =  strtolower(str_replace(' ', '.', $first_name . '.' . $last_name . $random_numbers . '@prueba.com'));
            $create_user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            $create_user->save();

            $create_medical = new Medical();
            $create_medical->degree = $gender;
            $create_medical->phone = null;
            $create_medical->tag = uniqid();
            $create_medical->status = 1;
            $create_medical->user_id = $create_user->id ;
            $create_medical->save();

            $create_user_role = new RoleUser();
            $create_user_role->role_id = 1;
            $create_user_role->user_id = $create_user;
            $create_user_role->user_type = 'App\Models\User';
        
        }
    }
}
