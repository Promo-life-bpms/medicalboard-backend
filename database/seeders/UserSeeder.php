<?php

namespace Database\Seeders;

use App\Models\Medical;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin
        $create_admin_user = new User();
        $create_admin_user->name = 'Admin';
        $create_admin_user->lastname = 'Sistema';
        $create_admin_user->email =  'admin@admin.com';
        $create_admin_user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $create_admin_user->save();

        DB::table('role_user')->insert([
            'user_id' => $create_admin_user->id,
            'role_id' => 2,
            'user_type' => 'App\Models\User',
        ]);


        $medicals = [
            [
            "name"=> "Adriana Saucedo Reyes",
            "tagID"=> "654bd7762bda3"
            ],
            [
            "name"=> "Carlos Etiene Cordero Jaime",
            "tagID"=> "654bd7762dc53"
            ],
            [
            "name"=> "Elizabeth Joahana Ponce De León Leñero",
            "tagID"=> "654bd7762f685"
            ],
            [
            "name"=> "Ada García Monroy",
            "tagID"=> "654bd776308bd"
            ],
            [
            "name"=> "Julio Gaspar Trujillo Esteves",
            "tagID"=> "654bd77631fbb"
            ],
            [
            "name"=> "Alberto Nájar Aparicio",
            "tagID"=> "654bd7763321c"
            ],
            [
            "name"=> "Francisco Alberto Wong Viccon",
            "tagID"=> "654bd77634329"
            ],
            [
            "name"=> "Alicia Mandujano Mandujano",
            "tagID"=> "654bd77635413"
            ],
            [
            "name"=> "Angel Octavio Bonfil Arias",
            "tagID"=> "654bd776365da"
            ],
            [
            "name"=> "Arturo Montero Donatto",
            "tagID"=> "654bd776376e7"
            ],
            [
            "name"=> "Arturo García Correa",
            "tagID"=> "654bd77638775"
            ],
            [
            "name"=> "Beatriz Adriana Pliego Meneses",
            "tagID"=> "654bd77639a00"
            ],
            [
            "name"=> "Beatríz Maldonado Tapia",
            "tagID"=> "654bd7763b586"
            ],
            [
            "name"=> "José Francisco Bulos Nicolás",
            "tagID"=> "654bd7763d308"
            ],
            [
            "name"=> "María del Socorro Ortíz Gea",
            "tagID"=> "654bd7763f191"
            ],
            [
            "name"=> "Jesús Ernesto Chong Vera",
            "tagID"=> "654bd77641135"
            ],
            [
            "name"=> "Zenón Alejandro Ayala Berra",
            "tagID"=> "654bd77642d81"
            ],
            [
            "name"=> "Carlos Alejandro Ángulo Cruz",
            "tagID"=> "654bd77644a3c"
            ],
            [
            "name"=> "Jesús Ángel Arroyo Moreno",
            "tagID"=> "654bd776466f3"
            ],
            [
            "name"=> "Armando Ashane Bulos",
            "tagID"=> "654bd776481c1"
            ],
            [
            "name"=> "Julián Ezequiel González Valdivia",
            "tagID"=> "654bd77649c95"
            ],
            [
            "name"=> "Héctor Hernández Cerritos",
            "tagID"=> "654bd7764b67a"
            ],
            [
            "name"=> "Claudia Elvia Pérez Quesnel",
            "tagID"=> "654bd7764d1eb"
            ],
            [
            "name"=> "Arturo Cuatepotzo Durán",
            "tagID"=> "654bd7764ebf2"
            ],
            [
            "name"=> "Refugio Maldonado García",
            "tagID"=> "654bd7765057c"
            ],
            [
            "name"=> "Luz María Alonso Zenil",
            "tagID"=> "654bd77651e9a"
            ],
            [
            "name"=> "Marcela Eugenia Bermúdez Morales",
            "tagID"=> "654bd776540f2"
            ],
            [
            "name"=> "Veronica Simancas Valencia",
            "tagID"=> "654bd776563cf"
            ],
            [
            "name"=> "Anel Hurtado Morales",
            "tagID"=> "654bd77658087"
            ],
            [
            "name"=> "Erik Milton Tolentino Galván",
            "tagID"=> "654bd77659b64"
            ],
            [
            "name"=> "Heidy Juárez Fuentes",
            "tagID"=> "654bd7765afb3"
            ],
            [
            "name"=> "Patricia Laurean Ibarra",
            "tagID"=> "654bd7765c28d"
            ],
            [
            "name"=> "Manuel Ayala Almeida",
            "tagID"=> "654bd7765d4f3"
            ],
            [
            "name"=> "Leonardo Antonio Estrada Sosa",
            "tagID"=> "654bd7765e683"
            ],
            [
            "name"=> "Erika Corral Kassian",
            "tagID"=> "654bd7765f7c4"
            ],
            [
            "name"=> "Emilio Agustín Rodríguez Tavera",
            "tagID"=> "654bd776605bf"
            ],
            [
            "name"=> "Fernando Antonio Gómez López",
            "tagID"=> "654bd776614aa"
            ],
            [
            "name"=> "Facundo García Membrillo",
            "tagID"=> "654bd7766245e"
            ],
            [
            "name"=> "Kepler Garcia Leguizamo",
            "tagID"=> "654bd7766330d"
            ],
            [
            "name"=> "Juan Carlos Moreno López Ortega",
            "tagID"=> "654bd7766410e"
            ],
            [
            "name"=> "Haydee Solis Herrera",
            "tagID"=> "654bd77664f57"
            ],
            [
            "name"=> "Héctor Jaime González Cabello",
            "tagID"=> "654bd77665d8f"
            ],
            [
            "name"=> "José Manuel Juárez Soto",
            "tagID"=> "654bd77666cf4"
            ],
            [
            "name"=> "Ignacio Rodríguez Martinez",
            "tagID"=> "654bd77667b67"
            ],
            [
            "name"=> "José de Jesús Chávez Camacho",
            "tagID"=> "654bd77668ae7"
            ],
            [
            "name"=> "Verónica Matías Hernández",
            "tagID"=> "654bd77669924"
            ],
            [
            "name"=> "Alfredo Martín Laurrabaquio Miranda",
            "tagID"=> "654bd7766a7c1"
            ],
            [
            "name"=> "María Elena Ornelas Carsolio",
            "tagID"=> "654bd7766b5b6"
            ],
            [
            "name"=> "Miguel Vega Ortíz",
            "tagID"=> "654bd7766c42e"
            ],
            [
            "name"=> "Luciano Ricardo Mendiola Figueroa",
            "tagID"=> "654bd7766d2d1"
            ],
            [
            "name"=> "Miguel Ángel Cruz Márquez",
            "tagID"=> "654bd7766e187"
            ],
            [
            "name"=> "Margarita Del Real Calzada",
            "tagID"=> "654bd7766f009"
            ],
            [
            "name"=> "María Altagracia Islas Salas",
            "tagID"=> "654bd7766ff52"
            ],
            [
            "name"=> "María del Refugio Mejía Sánchez",
            "tagID"=> "654bd77670f5a"
            ],
            [
            "name"=> "Javier Sánchez Nava",
            "tagID"=> "654bd77671ec1"
            ],
            [
            "name"=> "Mario Jesús Antuña Alcázar",
            "tagID"=> "654bd77672d1f"
            ],
            [
            "name"=> "Penélope Antonieta Noriega Zapata",
            "tagID"=> "654bd77673cf6"
            ],
            [
            "name"=> "Luis Raúl Ramírez Piñon",
            "tagID"=> "654bd77674e18"
            ],
            [
            "name"=> "José Luis Castáñeda Narváez",
            "tagID"=> "654bd77675ea9"
            ],
            [
            "name"=> "Silvia Elena Carrillo Nieto",
            "tagID"=> "654bd77676e17"
            ],
            [
            "name"=> "José Antonio Madrid Gómez Tagle",
            "tagID"=> "654bd77677e4d"
            ],
            [
            "name"=> "Gabino Vera Vargas",
            "tagID"=> "654bd77678cfd"
            ],
            [
            "name"=> "José Alberto Castillo",
            "tagID"=> "654bd77679b17"
            ],
            [
            "name"=> "Sony Amparo Loranca Corona",
            "tagID"=> "654bd7767aa15"
            ],
            [
            "name"=> "Alejandra Priscila Juarez Ruiz",
            "tagID"=> "654bd7767b947"
            ],
            [
            "name"=> "Cynthia Karína Portillo González",
            "tagID"=> "654bd7767c8b6"
            ],
            [
            "name"=> "Rafael Agustín Mustieles Barragán",
            "tagID"=> "654bd7767d741"
            ],
            [
            "name"=> "Salvador Tejeda Tovar",
            "tagID"=> "654bd7767e59b"
            ],
            [
            "name"=> "Sara Bertha Rodríguez Islas",
            "tagID"=> "654bd7767f4e3"
            ],
            [
            "name"=> "Ricardo Alberto Galván Arroyo",
            "tagID"=> "654bd776804a8"
            ],
            [
            "name"=> "Rodrigo Vásquez del Mercado Cordero",
            "tagID"=> "654bd7768134a"
            ],
            [
            "name"=> "Susana Nayeli Martinez Nava",
            "tagID"=> "654bd77682137"
            ],
            [
            "name"=> "Luis Carlos Castillo Escutia",
            "tagID"=> "654bd77682fd5"
            ],
            [
            "name"=> "José Luis Tejera Orozco",
            "tagID"=> "654bd77683ebe"
            ],
            [
            "name"=> "Gerardo Ugarte De la Vega",
            "tagID"=> "654bd77684d2c"
            ],
            [
            "name"=> "Humberto Vázquez Orihuela",
            "tagID"=> "654bd77685bfe"
            ],
            [
            "name"=> "Yolanda Carrillo Arizmendi",
            "tagID"=> "654bd77686c47"
            ],
            [
            "name"=> "Gabriela Millotte Galíndo",
            "tagID"=> "654bd77687cc3"
            ],
            [
            "name"=> "Carla Lorena Echevarría Céspedes",
            "tagID"=> "654bd77688c21"
            ],
            [
            "name"=> "Felipe Arteaga García",
            "tagID"=> "654bd77689a4f"
            ],
            [
            "name"=> "Sugeily Valdelamar Mendoza",
            "tagID"=> "654bd7768aa64"
            ],
            [
            "name"=> "Marcos Favela Mendoza",
            "tagID"=> "654bd7768b89f"
            ],
            [
            "name"=> "Daniel Montaño Rios",
            "tagID"=> "654bd7768cabd"
            ],
            [
            "name"=> "Adrian Palacios Cisneros",
            "tagID"=> "654bd7768d9b2"
            ],
            [
            "name"=> "Alejandro Moguel Hernández",
            "tagID"=> "654bd7768e8a2"
            ],
            [
            "name"=> "Jorge Arturo Ballesteros Barrera",
            "tagID"=> "654bd7768f5f2"
            ],
            [
            "name"=> "Abel Rodríguez Rodríguez",
            "tagID"=> "654bd776905a5"
            ],
            [
            "name"=> "Claudia Adriana Hurtado Ochoterena",
            "tagID"=> "654bd776915b4"
            ],
            [
            "name"=> "Marco Antonio Balanzario Poblano",
            "tagID"=> "654bd77692a33"
            ],
            [
            "name"=> "Francisco Ramirez Santa Rita",
            "tagID"=> "654bd77694416"
            ],
            [
            "name"=> "Juana Marín Martínez",
            "tagID"=> "654bd77695d81"
            ],
            [
            "name"=> "José Carlos Anzures Aguilar",
            "tagID"=> "654bd77697b29"
            ],
            [
            "name"=> "Carlos De la Calleja Rodríguez",
            "tagID"=> "654bd776994d2"
            ],
            [
            "name"=> "Alberto Delgado Sandoval",
            "tagID"=> "654bd7769a7f6"
            ],
            [
            "name"=> "César Gíl Meríno",
            "tagID"=> "654bd7769b9c4"
            ],
            [
            "name"=> "Sergio Iván Assia Robles",
            "tagID"=> "654bd7769cb18"
            ],
            [
            "name"=> "Diana Elizabeth Assia Zamora",
            "tagID"=> "654bd7769dc47"
            ],
            [
            "name"=> "Eduardo González Barbosa",
            "tagID"=> "654bd7769ed77"
            ],
            [
            "name"=> "José Felipe Pazos",
            "tagID"=> "654bd7769fdd0"
            ],
            [
            "name"=> "Fernando Marrufo González",
            "tagID"=> "654bd776a0e2d"
            ],
            [
            "name"=> "José Luis Concha de La Palacios",
            "tagID"=> "654bd776a1caf"
            ],
            [
            "name"=> "José Luis Jorge Aguilar Herrera",
            "tagID"=> "654bd776a2b26"
            ],
            [
            "name"=> "José Luis Madrigal Navarro",
            "tagID"=> "654bd776a3971"
            ],
            [
            "name"=> "Alejandro Alberto Terreros Moreyra",
            "tagID"=> "654bd776a4843"
            ],
            [
            "name"=> "Luz Irma Silvia Árias Ramírez",
            "tagID"=> "654bd776a56c1"
            ],
            [
            "name"=> "José Francisco Espinosa Tenorio",
            "tagID"=> "654bd776a64ca"
            ],
            [
            "name"=> "Rigoberto Santander Aldave",
            "tagID"=> "654bd776a7309"
            ],
            [
            "name"=> "Osvaldo Domínguez Andrade",
            "tagID"=> "654bd776a81c5"
            ],
            [
            "name"=> "Alfredo González Castañeda",
            "tagID"=> "654bd776a903e"
            ],
            [
            "name"=> "Ana Patricia Martínez González",
            "tagID"=> "654bd776a9e79"
            ],
            [
            "name"=> "David Servando Oropeza Rosas",
            "tagID"=> "654bd776aacdd"
            ],
            [
            "name"=> "José Euberto Méndez Cisneros",
            "tagID"=> "654bd776abb48"
            ],
            [
            "name"=> "Jose Luis Santamaria Perez",
            "tagID"=> "654bd776ac9ba"
            ],
            [
            "name"=> "Alberto García Tepehuac",
            "tagID"=> "654bd776ad883"
            ],
            [
            "name"=> "Alfonso Zamora Ustaran",
            "tagID"=> "654bd776ae73f"
            ],
            [
            "name"=> "Melitón Morales Castro",
            "tagID"=> "654bd776af63f"
            ],
            [
            "name"=> "Porfirio Antonio Valdivia Gallardo",
            "tagID"=> "654bd776b04c1"
            ],
            [
            "name"=> "César Raúl Azcarraga De Lara",
            "tagID"=> "654bd776b13b7"
            ],
            [
            "name"=> "Roberto Tepatzi Carranco",
            "tagID"=> "654bd776b21b2"
            ],
            [
            "name"=> "Carlos Manuel González Rodríguez",
            "tagID"=> "654bd776b307b"
            ],
            [
            "name"=> "Juan Ricardo Ferrer Aldana",
            "tagID"=> "654bd776b6004"
            ],
            [
            "name"=> "Flavio Martinez Ortega",
            "tagID"=> "654bd776b72fb"
            ],
            [
            "name"=> "Sandra Gabriela Salinas De la Chaussee",
            "tagID"=> "654bd776b8450"
            ],
            [
            "name"=> "Juana Bobadilla Ríos",
            "tagID"=> "654bd776b9421"
            ],
            [
            "name"=> "José Luis Sánchez Luna",
            "tagID"=> "654bd776ba698"
            ],
            [
            "name"=> "José Luis Velez Salas",
            "tagID"=> "654bd776bb64e"
            ],
            [
            "name"=> "Juan Antonio Paleta Conde",
            "tagID"=> "654bd776bc6b6"
            ],
            [
            "name"=> "Ingmar Salvador Contreras Rivera",
            "tagID"=> "654bd776bd60f"
            ],
            [
            "name"=> "Ignacio Manuel Tlapanco Barba",
            "tagID"=> "654bd776be575"
            ],
            [
            "name"=> "José Leopoldo Galindo Cortés",
            "tagID"=> "654bd776bf5fc"
            ],
            [
            "name"=> "Marco Flavio Martínez Romero",
            "tagID"=> "654bd776c0850"
            ],
            [
            "name"=> "Josafat Roldán Áhuatl",
            "tagID"=> "654bd776c189b"
            ],
            [
            "name"=> "Josefina Sánchez Ramírez",
            "tagID"=> "654bd776c36ae"
            ],
            [
            "name"=> "José Sergio Susano Pérez Tlapale",
            "tagID"=> "654bd776c4f8c"
            ],
            [
            "name"=> "Ricardo Marcelo Jimeno Arce",
            "tagID"=> "654bd776c6000"
            ],
            [
            "name"=> "Natasha Rosas Avila",
            "tagID"=> "654bd776c6f4c"
            ],
            [
            "name"=> "Ana Larissa Hernandez Garcia",
            "tagID"=> "654bd776c8288"
            ],
            [
            "name"=> "Arturo Zuñiga Barrios",
            "tagID"=> "654bd776c93b3"
            ],
            [
            "name"=> "Isaac Jimenez Covarrubias",
            "tagID"=> "654bd776ca413"
            ],
            [
            "name"=> "Luis Javier Hernández Góngora",
            "tagID"=> "654bd776cb3cc"
            ],
            [
            "name"=> "Salvador Lima Jiménez",
            "tagID"=> "654bd776cc1b8"
            ],
            [
            "name"=> "Ramon Patiño Ramos",
            "tagID"=> "654bd776cd00d"
            ],
            [
            "name"=> "Agustín Gutierrez Uriostegui",
            "tagID"=> "654bd776cdf78"
            ],
            [
            "name"=> "Claudia Edith Montes Martinez",
            "tagID"=> "654bd776cf554"
            ],
            [
            "name"=> "José Rufino Guillermo Lima Sánchez",
            "tagID"=> "654bd776d09c2"
            ],
            [
            "name"=> "Dora Imelda Cruz Cortes",
            "tagID"=> "654bd776d1b0b"
            ],
            [
            "name"=> "Nidia Grisell García Córdova",
            "tagID"=> "654bd776d2c44"
            ],
            [
            "name"=> "Arisbeth Perez Becerra",
            "tagID"=> "654bd776d3e74"
            ],
            [
            "name"=> "Alejandro Miguel Marín Ruíz",
            "tagID"=> "654bd776d4cd8"
            ],
            [
            "name"=> "Alejandro Pérez Lima Romero",
            "tagID"=> "654bd776d5b11"
            ],
            [
            "name"=> "Luis Cipriano Bretón Hernández",
            "tagID"=> "654bd776d67f2"
            ],
            [
            "name"=> "María Eugenia Rivera Domínguez",
            "tagID"=> "654bd776d7542"
            ],
            [
            "name"=> "Manuel Arturo Gonzalez Peña",
            "tagID"=> "654bd776d82b7"
            ],
            [
            "name"=> "Gustavo Castáñeda Pérez",
            "tagID"=> "654bd776d8f98"
            ],
            [
            "name"=> "Gregorio Mota Silva",
            "tagID"=> "654bd776d9bf9"
            ],
            [
            "name"=> "Hans Trujillo Moreno",
            "tagID"=> "654bd776da8a9"
            ],
            [
            "name"=> "José Arturo Galíndo García",
            "tagID"=> "654bd776db5fc"
            ],
            [
            "name"=> "Julián Rodríguez Orozco",
            "tagID"=> "654bd776dc5ff"
            ],
            [
            "name"=> "Judith González Carpio Larios",
            "tagID"=> "654bd776dd325"
            ],
            [
            "name"=> "Hector Mellado De la Cruz",
            "tagID"=> "654bd776de155"
            ],
            [
            "name"=> "César Martín Flores Vera",
            "tagID"=> "654bd776dee5d"
            ],
            [
            "name"=> "Alberto Jiménez Jiménez",
            "tagID"=> "654bd776dfb40"
            ],
            [
            "name"=> "Rubén Delfino Villegas Sánchez",
            "tagID"=> "654bd776e07f4"
            ],
            [
            "name"=> "René Mino Reyes",
            "tagID"=> "654bd776e16dc"
            ],
            [
            "name"=> "Paz Irene Díaz Sosa",
            "tagID"=> "654bd776e2512"
            ],
            [
            "name"=> "Omar Ramírez Salazar",
            "tagID"=> "654bd776e340a"
            ],
            [
            "name"=> "Janet Álvarez Abreu",
            "tagID"=> "654bd776e421d"
            ],
            [
            "name"=> "Luis Coronel Cruzado",
            "tagID"=> "654bd776e50ce"
            ],
            [
            "name"=> "Hugo Arturo Galindo Campos",
            "tagID"=> "654bd776e619f"
            ],
            [
            "name"=> "Dora Muñoz Huey",
            "tagID"=> "654bd776e7155"
            ],
            [
            "name"=> "Juan Manuel Calvo Gaytan",
            "tagID"=> "654bd776e8498"
            ],
            [
            "name"=> "Missael Arroyo Flores",
            "tagID"=> "654bd776e9369"
            ],
            [
            "name"=> "Leticia Rodríguez Villegas",
            "tagID"=> "654bd776ea159"
            ],
            [
            "name"=> "Omar Beltrán Galindo",
            "tagID"=> "654bd776eb1f3"
            ],
            [
            "name"=> "Beatriz Adame Avila",
            "tagID"=> "654bd776ec0cc"
            ],
            [
            "name"=> "Carlos Aknerth Salado Lima",
            "tagID"=> "654bd776ecffb"
            ],
            [
            "name"=> "Carlos Asterio Salgado Krinis",
            "tagID"=> "654bd776ee048"
            ],
            [
            "name"=> "Gaspar Montesinos Ramírez",
            "tagID"=> "654bd776eeeed"
            ],
            [
            "name"=> "Héctor Manuel Garza Rivera",
            "tagID"=> "654bd776effc7"
            ],
            [
            "name"=> "María del Carmen Enriqueta Melo Zurita",
            "tagID"=> "654bd776f1072"
            ],
            [
            "name"=> "René Gómez Ludwig",
            "tagID"=> "654bd776f1e21"
            ],
            [
            "name"=> "Juan Manuel Figueroa Báez",
            "tagID"=> "654bd776f2b95"
            ],
            [
            "name"=> "Eduardo Francisco Sumano Mora",
            "tagID"=> "654bd776f3ac9"
            ],
            [
            "name"=> "Martha Leticia Cruzalta Bahena",
            "tagID"=> "654bd7770075b"
            ],
            [
            "name"=> "José Luis Frías Rodríguez",
            "tagID"=> "654bd777015ac"
            ],
            [
            "name"=> "Raúl Segura Ponce",
            "tagID"=> "654bd77702428"
            ],
            [
            "name"=> "Laura A. Pym Peña",
            "tagID"=> "654bd7770328a"
            ],
            [
            "name"=> "Juan José Delgado Donis",
            "tagID"=> "654bd777042b9"
            ],
            [
            "name"=> "Carlos Enrique Aguirre Tejedo",
            "tagID"=> "654bd77705290"
            ],
            [
            "name"=> "Rocio Esmeralda Mateos Martinez",
            "tagID"=> "654bd77706198"
            ],
            [
            "name"=> "Berenice Vergara Becerril",
            "tagID"=> "654bd77707025"
            ],
            [
            "name"=> "Rogelio Silva Gutiérrez",
            "tagID"=> "654bd77707e45"
            ],
            [
            "name"=> "Blanca Graciela Robles Méndez",
            "tagID"=> "654bd77708d9f"
            ],
            [
            "name"=> "Cecilia Carolina Hernández Dominguez",
            "tagID"=> "654bd77709be5"
            ],
            [
            "name"=> "César Alejandro Zúñiga Martínez",
            "tagID"=> "654bd7770a9fa"
            ],
            [
            "name"=> "Jesus Antonio Vazquez Avendaño",
            "tagID"=> "654bd7770b816"
            ],
            [
            "name"=> "Leonardo Santos Rodas",
            "tagID"=> "654bd7770c644"
            ],
            [
            "name"=> "Jesús Antonio Chandoqui Solís",
            "tagID"=> "654bd7770d5ff"
            ],
            [
            "name"=> "Adalberto Galdamez Barrios",
            "tagID"=> "654bd7770e3f9"
            ],
            [
            "name"=> "Jorge Marcey Villatoro Meza",
            "tagID"=> "654bd7770f139"
            ],
            [
            "name"=> "Francisco Javier Gallegos Aguilar",
            "tagID"=> "654bd7770fe47"
            ],
            [
            "name"=> "Julio Andrés Salazar Farías",
            "tagID"=> "654bd77710cc4"
            ],
            [
            "name"=> "José Benigno Moreno Ruíz",
            "tagID"=> "654bd77711c35"
            ],
            [
            "name"=> "Jesus Mario Altuzar Gordillo",
            "tagID"=> "654bd77712a3a"
            ],
            [
            "name"=> "Israel Yberri Zarate",
            "tagID"=> "654bd77713a7f"
            ],
            [
            "name"=> "Mario Alberto Cuesta Vázquez",
            "tagID"=> "654bd777148af"
            ],
            [
            "name"=> "María de la Luz Sánchez Tirado",
            "tagID"=> "654bd77715627"
            ],
            [
            "name"=> "Minerva Reyes García",
            "tagID"=> "654bd77716320"
            ],
            [
            "name"=> "Jorge Arturo Pinto Astudillo",
            "tagID"=> "654bd77717087"
            ],
            [
            "name"=> "Mario Alberto Ruíz Coutiño",
            "tagID"=> "654bd77717e73"
            ],
            [
            "name"=> "Mauricio Mijangos Lazos",
            "tagID"=> "654bd77719043"
            ],
            [
            "name"=> "Yesenia Guadalupe Aguilar Penagos",
            "tagID"=> "654bd7771a659"
            ],
            [
            "name"=> "Pablo David De Coss Interiano",
            "tagID"=> "654bd7771c239"
            ],
            [
            "name"=> "Francisco Javier Medina Carranza",
            "tagID"=> "654bd7771dcca"
            ],
            [
            "name"=> "Ricardo Montesinos Popomeya",
            "tagID"=> "654bd7771f706"
            ],
            [
            "name"=> "Alberto Pérez Pinto",
            "tagID"=> "654bd77721032"
            ],
            [
            "name"=> "Rey David Estudillo Santiago",
            "tagID"=> "654bd77722ade"
            ],
            [
            "name"=> "Jesus Alejandro Moreno Salazar",
            "tagID"=> "654bd777243e5"
            ],
            [
            "name"=> "Alfonso Torres Aguilar",
            "tagID"=> "654bd77725de6"
            ],
            [
            "name"=> "Carlos Guillermo Najera Villatoro",
            "tagID"=> "654bd77727957"
            ],
            [
            "name"=> "José Juan Corzo Ruiz",
            "tagID"=> "654bd77728ff4"
            ],
            [
            "name"=> "Martha Karimy Merino Nazar",
            "tagID"=> "654bd7772a51f"
            ],
            [
            "name"=> "Roberto Ochoa Muñoz",
            "tagID"=> "654bd7772fd7a"
            ],
            [
            "name"=> "Pablo Alberto Morales Lopez",
            "tagID"=> "654bd77731853"
            ],
            [
            "name"=> "Miguel Sánchez Suárez",
            "tagID"=> "654bd77733707"
            ],
            [
            "name"=> "Drina Rivas Bastidas",
            "tagID"=> "654bd77735113"
            ],
            [
            "name"=> "Maria Jose Martinez Cristiani",
            "tagID"=> "654bd77736dd2"
            ],
            [
            "name"=> "Pedro Mauricio Gomez Gutierrez",
            "tagID"=> "654bd77738856"
            ],
            [
            "name"=> "Albino Velázquez Lagunes",
            "tagID"=> "654bd7773a5d2"
            ],
            [
            "name"=> "Russell Ricardo Valdéz González",
            "tagID"=> "654bd7773c4c3"
            ],
            [
            "name"=> "Elmer Gabriel López Chan",
            "tagID"=> "654bd7773e3d6"
            ],
            [
            "name"=> "William Martín Díaz Basto",
            "tagID"=> "654bd7773fed9"
            ],
            [
            "name"=> "Roberto Greene Palacios",
            "tagID"=> "654bd7774148b"
            ],
            [
            "name"=> "Evelyn Azucena Cach Martinez",
            "tagID"=> "654bd77742b53"
            ],
            [
            "name"=> "Felipe Adrián Sánchez Losa",
            "tagID"=> "654bd7774419f"
            ],
            [
            "name"=> "Gabriel Valdéz Zapata",
            "tagID"=> "654bd7774579d"
            ],
            [
            "name"=> "Gabriela Raquel Vela Urtecho",
            "tagID"=> "654bd77746f0a"
            ],
            [
            "name"=> "Gerlin Hernandez Peña",
            "tagID"=> "654bd77748457"
            ],
            [
            "name"=> "Jorge Fabián Cruz Manzanero",
            "tagID"=> "654bd77749aee"
            ],
            [
            "name"=> "Nemias de Jesús Miam Quijano",
            "tagID"=> "654bd7774b1ce"
            ],
            [
            "name"=> "Kikey Coralia Achach Medina",
            "tagID"=> "654bd7774c709"
            ],
            [
            "name"=> "Luis Felipe Méndez Novelo",
            "tagID"=> "654bd7774de74"
            ],
            [
            "name"=> "Luis Augusto Manzanilla Félix",
            "tagID"=> "654bd7774fe09"
            ],
            [
            "name"=> "Francisco Manuel Escalante Rejón",
            "tagID"=> "654bd77751ebd"
            ],
            [
            "name"=> "Henry Nelson Perez Santiago",
            "tagID"=> "654bd77753bac"
            ],
            [
            "name"=> "Roger Eduardo Sánchez Avilés",
            "tagID"=> "654bd777555e1"
            ],
            [
            "name"=> "Vicente Martínez Gómez",
            "tagID"=> "654bd777576f5"
            ],
            [
            "name"=> "Fernando Trujillo Tobon",
            "tagID"=> "654bd77759dac"
            ],
            [
            "name"=> "Madai Esteves Cruz",
            "tagID"=> "654bd7775cc52"
            ],
            [
            "name"=> "Alam Otoniel Medina Ventura",
            "tagID"=> "654bd7775e704"
            ],
            [
            "name"=> "Carlos Anastacio de Jesús Dib Fuentes",
            "tagID"=> "654bd777600fb"
            ],
            [
            "name"=> "Carlos Enrique Marrufo Y Olivares",
            "tagID"=> "654bd777614fa"
            ],
            [
            "name"=> "César Humberto Briceño Navarrete",
            "tagID"=> "654bd7776290a"
            ],
            [
            "name"=> "Irving Abelardo de Jesús Sauri Cruz",
            "tagID"=> "654bd77763f68"
            ],
            [
            "name"=> "Luis Manuel Bassó García",
            "tagID"=> "654bd777652ea"
            ],
            [
            "name"=> "Carlos Renán Lara Navarrete",
            "tagID"=> "654bd7776668d"
            ],
            [
            "name"=> "David Antonio Aguilar Castillo",
            "tagID"=> "654bd77767cd6"
            ],
            [
            "name"=> "David Ernesto Cantó Chay",
            "tagID"=> "654bd77769011"
            ],
            [
            "name"=> "Felipe José Díaz Rubio",
            "tagID"=> "654bd7776a656"
            ],
            [
            "name"=> "Armando José Briceño Pérez",
            "tagID"=> "654bd7776bcdb"
            ],
            [
            "name"=> "Carlos Manuel Quiñones Vega",
            "tagID"=> "654bd7776d101"
            ],
            [
            "name"=> "Francisco González Martínez",
            "tagID"=> "654bd7776e43f"
            ],
            [
            "name"=> "Rossana Farías Cid",
            "tagID"=> "654bd7776f8a9"
            ],
            [
            "name"=> "Fernando Cardena Ángulo",
            "tagID"=> "654bd77770c39"
            ],
            [
            "name"=> "Hugo Hernán Cámara Combaluzier",
            "tagID"=> "654bd777730b1"
            ],
            [
            "name"=> "Héctor Herve Cabrera Baqueiro",
            "tagID"=> "654bd7777425f"
            ],
            [
            "name"=> "Ileana Guadalupe Alonzo Novelo",
            "tagID"=> "654bd7777520e"
            ],
            [
            "name"=> "Miguel Angel Gamboa Y Gamboa",
            "tagID"=> "654bd7777639b"
            ],
            [
            "name"=> "Martín Moo Marín",
            "tagID"=> "654bd77777527"
            ],
            [
            "name"=> "Moisés Casares Montalvo",
            "tagID"=> "654bd77778740"
            ],
            [
            "name"=> "Juan Pablo López Herrera",
            "tagID"=> "654bd77779672"
            ],
            [
            "name"=> "Patricia Borjas Ale",
            "tagID"=> "654bd7777a5d9"
            ],
            [
            "name"=> "Teresa Magaña Garza",
            "tagID"=> "654bd7777b592"
            ],
            [
            "name"=> "Virginia Alicia Aranda Cázares",
            "tagID"=> "654bd7777c7d1"
            ],
            [
            "name"=> "Paul Ricardo Vivas Estrada",
            "tagID"=> "654bd7777d7f1"
            ],
            [
            "name"=> "Wilhelm Herve Cerón Grajales",
            "tagID"=> "654bd7777e67c"
            ],
            [
            "name"=> "Zulmar Adiel Molina Ojeda",
            "tagID"=> "654bd7777f5ae"
            ],
            [
            "name"=> "Carlos Reyes Ordaz Ortiz",
            "tagID"=> "654bd777807a8"
            ],
            [
            "name"=> "Marco Antonio Escalante Rodríguez",
            "tagID"=> "654bd77781a1f"
            ],
            [
            "name"=> "Alejandro Tercero Flores",
            "tagID"=> "654bd77782e6a"
            ],
            [
            "name"=> "Cecilia Goreti Paredes Aquino",
            "tagID"=> "654bd777845c7"
            ],
            [
            "name"=> "Javier Ernesto Lara Canul",
            "tagID"=> "654bd777859ed"
            ],
            [
            "name"=> "Herbert Josué Puga Chan",
            "tagID"=> "654bd7778703d"
            ],
            [
            "name"=> "Alberto Jose Contreras Espinosa",
            "tagID"=> "654bd7778884f"
            ],
            [
            "name"=> "Daniel Armando Briceño Abraham",
            "tagID"=> "654bd77789f54"
            ],
            [
            "name"=> "Manuel Armando Parra Vinajera",
            "tagID"=> "654bd7778b5f1"
            ],
            [
            "name"=> "José Omar Peraza Llanes",
            "tagID"=> "654bd7778ccf6"
            ],
            [
            "name"=> "Jose Ariel Castillo Moguel",
            "tagID"=> "654bd7778e0d0"
            ],
            [
            "name"=> "Adolfo De Jesús García",
            "tagID"=> "654bd7778f4a1"
            ],
            [
            "name"=> "Alan Estrada Cardona",
            "tagID"=> "654bd77790b55"
            ],
            [
            "name"=> "Pedro Álvarez Vargas",
            "tagID"=> "654bd77791f5f"
            ],
            [
            "name"=> "Beatríz Margarita Gutierrez Medina",
            "tagID"=> "654bd777933d6"
            ],
            [
            "name"=> "Juan Carlos Carrera Morales",
            "tagID"=> "654bd77794a90"
            ],
            [
            "name"=> "Eduardo Velázquez Carpio",
            "tagID"=> "654bd77795ddd"
            ],
            [
            "name"=> "Fredy Cruz Mendoza",
            "tagID"=> "654bd7779722d"
            ],
            [
            "name"=> "Luis Arturo Ponce Rosas",
            "tagID"=> "654bd77798836"
            ],
            [
            "name"=> "Bernardo Russek Portales",
            "tagID"=> "654bd77799bd7"
            ],
            [
            "name"=> "Nancy Jiménez Paniagua",
            "tagID"=> "654bd7779aebb"
            ],
            [
            "name"=> "Sergio Raúl González Adriano",
            "tagID"=> "654bd7779c374"
            ],
            [
            "name"=> "Elizabeth Solano Pareja",
            "tagID"=> "654bd7779d8c9"
            ],
            [
            "name"=> "Luis Miguel Alvarez Luna",
            "tagID"=> "654bd7779ec89"
            ],
            [
            "name"=> "Erika Adriana Luna Gomez",
            "tagID"=> "654bd777a09fb"
            ],
            [
            "name"=> "Carlos Jose Eysele Perez",
            "tagID"=> "654bd777a2147"
            ],
            [
            "name"=> "Gilberto Rosales Cervantes",
            "tagID"=> "654bd777a348a"
            ],
            [
            "name"=> "Mair Ivette Moreno Romero",
            "tagID"=> "654bd777a4a34"
            ],
            [
            "name"=> "Héctor Francisco Marín Salvati",
            "tagID"=> "654bd777a5bf8"
            ],
            [
            "name"=> "Emmanuel Ramirez Sanchez",
            "tagID"=> "654bd777a69fc"
            ],
            [
            "name"=> "Jaime Abraham Ceballos Flores",
            "tagID"=> "654bd777a7846"
            ],
            [
            "name"=> "María Katinka del Carmen Quintal Bastarrachea",
            "tagID"=> "654bd777a8b04"
            ],
            [
            "name"=> "Luis López Gómez",
            "tagID"=> "654bd777a99f6"
            ],
            [
            "name"=> "Marco Antonio Segovia Cuevas",
            "tagID"=> "654bd777aa853"
            ],
            [
            "name"=> "Javier Zapata May",
            "tagID"=> "654bd777ab70c"
            ],
            [
            "name"=> "Gabriel Ruiz Villeda",
            "tagID"=> "654bd777ac919"
            ],
            [
            "name"=> "Juan Pedro Sánchez Campodonico",
            "tagID"=> "654bd777ad87d"
            ],
            [
            "name"=> "Ernestina González Mercado",
            "tagID"=> "654bd777ae696"
            ],
            [
            "name"=> "Daniela Michell Aguirre González",
            "tagID"=> "654bd777af4d7"
            ],
            [
            "name"=> "Araceli Monserrath Reyes Palomino",
            "tagID"=> "654bd777b0594"
            ],
            [
            "name"=> "Laura Fabiola Chávez García",
            "tagID"=> "654bd777b163a"
            ],
            [
            "name"=> "Roxana Noriega Alvarez",
            "tagID"=> "654bd777b257a"
            ],
            [
            "name"=> "Hania Beatriz Gasca Osorio",
            "tagID"=> "654bd777b3454"
            ],
            [
            "name"=> "Adolfo Feliciano Duarte Sánchez",
            "tagID"=> "654bd777b4592"
            ],
            [
            "name"=> "Cinthya Martínez Ruiz",
            "tagID"=> "654bd777b5780"
            ],
            [
            "name"=> "José Heriberto Álvarez Rojas",
            "tagID"=> "654bd777b6683"
            ],
            [
            "name"=> "Ángel Lara Valdés",
            "tagID"=> "654bd777b8b81"
            ],
            [
            "name"=> "Alejandro Torres Castillo",
            "tagID"=> "654bd777ba05e"
            ],
            [
            "name"=> "Oscar Alejandro Ruvalcaba Rojas",
            "tagID"=> "654bd777bb367"
            ],
            [
            "name"=> "Denisse Concepción Rodríguez López",
            "tagID"=> "654bd777bc9fa"
            ],
            [
            "name"=> "María Guadalupe Gómez Toledo",
            "tagID"=> "654bd777be6fc"
            ],
            [
            "name"=> "Dulce María de Jesús Crespo Ruíz",
            "tagID"=> "654bd777bfb08"
            ],
            [
            "name"=> "Andrés Hermida Moreno",
            "tagID"=> "654bd777c0ee5"
            ],
            [
            "name"=> "Erasmo Carlos Hernández Vega",
            "tagID"=> "654bd777c22a1"
            ],
            [
            "name"=> "Ricardo Oliver Cano García",
            "tagID"=> "654bd777c3681"
            ],
            [
            "name"=> "José Alejandro Salmones Zarraluqui",
            "tagID"=> "654bd777c4ce3"
            ],
            [
            "name"=> "Manuel Vázquez Marcial",
            "tagID"=> "654bd777c6194"
            ],
            [
            "name"=> "Margarita Marina Ramírez Rivera",
            "tagID"=> "654bd777c716f"
            ],
            [
            "name"=> "Olga Patricia Vázquez Autrán",
            "tagID"=> "654bd777ca7c7"
            ],
            [
            "name"=> "Ruth Betsabé De Hoyos Robledo",
            "tagID"=> "654bd777cbb8e"
            ],
            [
            "name"=> "Rubén Eduardo Vázquez García",
            "tagID"=> "654bd777cccff"
            ],
            [
            "name"=> "Tobías Hamal Casab Tolosa",
            "tagID"=> "654bd777cdd8d"
            ],
            [
            "name"=> "Tomás Torres Manjarrez",
            "tagID"=> "654bd777ceda3"
            ],
            [
            "name"=> "Dulce Alejandra Vargas Chávez",
            "tagID"=> "654bd777cff81"
            ],
            [
            "name"=> "Ana Magdalena Camarillo Duran",
            "tagID"=> "654bd777d113e"
            ],
            [
            "name"=> "María Alejandra Monzoy Ventre",
            "tagID"=> "654bd777d2224"
            ],
            [
            "name"=> "Anastasio Vicente Bautista González",
            "tagID"=> "654bd777d33ae"
            ],
            [
            "name"=> "Bernardo Lira Rivera",
            "tagID"=> "654bd777d47db"
            ],
            [
            "name"=> "Sandra Charis Santiago",
            "tagID"=> "654bd777d5bb8"
            ],
            [
            "name"=> "Jaqueline Rosario Reyes Aguilar",
            "tagID"=> "654bd777d7117"
            ],
            [
            "name"=> "Claudia Díaz Sanguines",
            "tagID"=> "654bd777d8203"
            ],
            [
            "name"=> "Jessica Ortiz Moreno",
            "tagID"=> "654bd777d93dc"
            ],
            [
            "name"=> "Yolanda Sánchez Ulloa",
            "tagID"=> "654bd777da3a6"
            ],
            [
            "name"=> "Ernesto Lopez Lena Carrasco",
            "tagID"=> "654bd777db361"
            ],
            [
            "name"=> "Gustavo Gomez Gomez",
            "tagID"=> "654bd777dc3ce"
            ],
            [
            "name"=> "Angel Jarquín Sandoval",
            "tagID"=> "654bd777dd36f"
            ],
            [
            "name"=> "Héctor Tenorio Rodríguez",
            "tagID"=> "654bd777de35e"
            ],
            [
            "name"=> "Ittai Heidi Pérez Niño",
            "tagID"=> "654bd777df4b0"
            ],
            [
            "name"=> "María Laura Javier Carreño",
            "tagID"=> "654bd777e0569"
            ],
            [
            "name"=> "Luis Alberto Sánchez Orozco",
            "tagID"=> "654bd777e160f"
            ],
            [
            "name"=> "Alberto Paz Pacheco",
            "tagID"=> "654bd777e25c9"
            ],
            [
            "name"=> "Omar Santiago Hernández Lunagómez",
            "tagID"=> "654bd777e3573"
            ],
            [
            "name"=> "Fredy Roque Ruiz Hernandez",
            "tagID"=> "654bd777e43ef"
            ],
            [
            "name"=> "José Ramírez Lázaro",
            "tagID"=> "654bd777e551c"
            ],
            [
            "name"=> "Carmen De la Cruz Sanchez",
            "tagID"=> "654bd777e6488"
            ],
            [
            "name"=> "Gabriela Hernandez Vez",
            "tagID"=> "654bd777e72b9"
            ],
            [
            "name"=> "Adolfo Martinez Ibarra",
            "tagID"=> "654bd777e808c"
            ],
            [
            "name"=> "Gloria Cristina Ortiz Onofre",
            "tagID"=> "654bd777e929f"
            ],
            [
            "name"=> "Daisy Jimenez Cortes",
            "tagID"=> "654bd777ea0d1"
            ],
            [
            "name"=> "Luis Aquino Santiago",
            "tagID"=> "654bd777ead37"
            ],
            [
            "name"=> "Antonio Munguia González",
            "tagID"=> "654bd777eba38"
            ],
            [
            "name"=> "Carlos Alejandro Ortega Santos",
            "tagID"=> "654bd777ec7e8"
            ],
            [
            "name"=> "Alfredo Valentín Cruz",
            "tagID"=> "654bd777ed64a"
            ],
            [
            "name"=> "Ruben Dario Meza Gutierrez",
            "tagID"=> "654bd777ee5f2"
            ],
            [
            "name"=> "David Huerta Morales",
            "tagID"=> "654bd777ef45c"
            ],
            [
            "name"=> "Luis Fortino Díaz González Velázquez",
            "tagID"=> "654bd777f02b0"
            ],
            [
            "name"=> "Ariana Bernal Zamora",
            "tagID"=> "654bd777f11f0"
            ],
            [
            "name"=> "Arturo Roldan Arce",
            "tagID"=> "654bd777f202c"
            ],
            [
            "name"=> "Edgar Huerta Murrieta",
            "tagID"=> "654bd777f2f7e"
            ],
            [
            "name"=> "Gilberto Hernández Martínez",
            "tagID"=> "654bd777f3dd2"
            ],
            [
            "name"=> "Luis Antonio Díaz Vega",
            "tagID"=> "654bd778009e5"
            ],
            [
            "name"=> "Jorge Rubén Cañas Acar",
            "tagID"=> "654bd77801899"
            ],
            [
            "name"=> "Jorge De Jesús Pascual Torres",
            "tagID"=> "654bd7780270c"
            ],
            [
            "name"=> "Maydelí Rosado Martínez",
            "tagID"=> "654bd778035e2"
            ],
            [
            "name"=> "Rafael Díaz Maraboto",
            "tagID"=> "654bd77804550"
            ],
            [
            "name"=> "Gloria Elizabeth Verdejo Blanco",
            "tagID"=> "654bd77805374"
            ],
            [
            "name"=> "Martha Patricia Hernández Ortega",
            "tagID"=> "654bd7780614e"
            ],
            [
            "name"=> "Brenda Cortés Zavaleta",
            "tagID"=> "654bd77806f63"
            ],
            [
            "name"=> "Zahira Talia Encina Barajas",
            "tagID"=> "654bd77807ea7"
            ],
            [
            "name"=> "Maribel Morales Mezo",
            "tagID"=> "654bd77808db2"
            ],
            [
            "name"=> "Humberto Martínez García",
            "tagID"=> "654bd77809c39"
            ],
            [
            "name"=> "Carlos Elio Ríos Pérez",
            "tagID"=> "654bd7780ab16"
            ],
            [
            "name"=> "César Augusto López García",
            "tagID"=> "654bd7780bbbb"
            ],
            [
            "name"=> "Darling Adriana Contreras Capetillo",
            "tagID"=> "654bd7780ca03"
            ],
            [
            "name"=> "Eduardo Ramón Gorian Maldonado",
            "tagID"=> "654bd7780d8c7"
            ],
            [
            "name"=> "Efraín Ramón Aguileta Rodríguez",
            "tagID"=> "654bd7780e786"
            ],
            [
            "name"=> "Elisauro López Casanova",
            "tagID"=> "654bd7780f697"
            ],
            [
            "name"=> "Elias Cordova Sastre",
            "tagID"=> "654bd778104fb"
            ],
            [
            "name"=> "Armando Gómez Arredondo",
            "tagID"=> "654bd7781136f"
            ],
            [
            "name"=> "Gilberto Escobar Carrillo",
            "tagID"=> "654bd778121f4"
            ],
            [
            "name"=> "Gonzálo Antonio Neme Díaz",
            "tagID"=> "654bd778130d1"
            ],
            [
            "name"=> "Jose David Villalobos Horcasita",
            "tagID"=> "654bd77813f0d"
            ],
            [
            "name"=> "José Luis Arias Arias",
            "tagID"=> "654bd77814d39"
            ],
            [
            "name"=> "José Luis Barrera Durán",
            "tagID"=> "654bd77815e8e"
            ],
            [
            "name"=> "Jorge Antonio Gongora Canto",
            "tagID"=> "654bd77816f3a"
            ],
            [
            "name"=> "Ignacio Vázquez León",
            "tagID"=> "654bd77817e61"
            ],
            [
            "name"=> "Juan Ramirez Loe",
            "tagID"=> "654bd77818d2f"
            ],
            [
            "name"=> "Luis Antonio Requena Trejo",
            "tagID"=> "654bd77819b76"
            ],
            [
            "name"=> "Alfonso Alberto Rodríguez Olivera",
            "tagID"=> "654bd7781aa03"
            ],
            [
            "name"=> "Maximiliano Gutiérrez Solís",
            "tagID"=> "654bd7781b8fb"
            ],
            [
            "name"=> "Ayda Milena Lázaro Lázaro",
            "tagID"=> "654bd7781c7a4"
            ],
            [
            "name"=> "Arturo Montalvo Marin",
            "tagID"=> "654bd7781d642"
            ],
            [
            "name"=> "Jesús Nuredim Del Ángel Assad",
            "tagID"=> "654bd7781e505"
            ],
            [
            "name"=> "Pedro Jiménez Ortíz",
            "tagID"=> "654bd7781f525"
            ],
            [
            "name"=> "William Lara Rada",
            "tagID"=> "654bd77820408"
            ],
            [
            "name"=> "Raul Humberto Muro Flores",
            "tagID"=> "654bd77821777"
            ],
            [
            "name"=> "Remigio Gómez Carrera",
            "tagID"=> "654bd77822754"
            ],
            [
            "name"=> "Ricardo Nava Jacome",
            "tagID"=> "654bd7782365f"
            ],
            [
            "name"=> "Wendy Morales Salazar",
            "tagID"=> "654bd778244dc"
            ],
            [
            "name"=> "Iris Selene Quijano Mendez",
            "tagID"=> "654bd7782535b"
            ],
            [
            "name"=> "Amador Contreras López",
            "tagID"=> "654bd778261f3"
            ],
            [
            "name"=> "Alonso Cruz Hernández",
            "tagID"=> "654bd77827048"
            ],
            [
            "name"=> "Francisco Gutiérrez Magaña",
            "tagID"=> "654bd77827f04"
            ],
            [
            "name"=> "Monserrat Gonzalez Flores",
            "tagID"=> "654bd77828e26"
            ],
            [
            "name"=> "Juan Javier Sobrino González",
            "tagID"=> "654bd77829c7e"
            ],
            [
            "name"=> "Isaac Baltazar Gómez",
            "tagID"=> "654bd7782aaf9"
            ],
            [
            "name"=> "Bernardino Hernández Cortés",
            "tagID"=> "654bd7782b9b8"
            ],
            [
            "name"=> "José Román González Coron",
            "tagID"=> "654bd7782c8ac"
            ],
            [
            "name"=> "Alejandro Torres Bravo",
            "tagID"=> "654bd7782d709"
            ],
            [
            "name"=> "Romualdo Hernández Yañez",
            "tagID"=> "654bd7782e579"
            ],
            [
            "name"=> "Luis Juan de Dios Horta Sedas",
            "tagID"=> "654bd7782f397"
            ],
            [
            "name"=> "Mónica del Carmen Gómez Medina",
            "tagID"=> "654bd7783021c"
            ],
            [
            "name"=> "Patricia Guadalupe Hernández Toledo",
            "tagID"=> "654bd7783105f"
            ],
            [
            "name"=> "Martha González Vázquez",
            "tagID"=> "654bd77831f1c"
            ],
            [
            "name"=> "José Antonio Sacre Hazouri",
            "tagID"=> "654bd77832d7d"
            ],
            [
            "name"=> "Carlos Manuel Rodriguez Nocetti",
            "tagID"=> "654bd77833ba3"
            ],
            [
            "name"=> "Carolina Ferreira Palma",
            "tagID"=> "654bd7783506f"
            ],
            [
            "name"=> "Jessica Neri Alvarez",
            "tagID"=> "654bd778361a5"
            ],
            [
            "name"=> "Augusto Rafael Aguilera Joaquin",
            "tagID"=> "654bd778370e8"
            ],
            [
            "name"=> "Gustavo Morales Espinosa",
            "tagID"=> "654bd77837f37"
            ],
            [
            "name"=> "José Ariel Cruz González",
            "tagID"=> "654bd77838e18"
            ],
            [
            "name"=> "Rosa Alba Gasca Ortega",
            "tagID"=> "654bd77839cfd"
            ],
            [
            "name"=> "Gloria Mendoza Molina",
            "tagID"=> "654bd7783ab86"
            ],
            [
            "name"=> "Amparo Chávez Gamboa",
            "tagID"=> "654bd7783ba66"
            ],
            [
            "name"=> "Erick Daniel Limon Rodriguez",
            "tagID"=> "654bd7783c8f8"
            ],
            [
            "name"=> "Alfonso Maciel Torres",
            "tagID"=> "654bd7783d888"
            ],
            [
            "name"=> "Bonifacio Arturo Álvarez Figueroa",
            "tagID"=> "654bd7783e844"
            ],
            [
            "name"=> "Andrés Lagunes Viveros",
            "tagID"=> "654bd7783f7ef"
            ],
            [
            "name"=> "Fernando Castañón Leo",
            "tagID"=> "654bd7784068e"
            ],
            [
            "name"=> "Graciela Torres Martínez",
            "tagID"=> "654bd778415a0"
            ],
            [
            "name"=> "Blas Alcides Vargas Vargas",
            "tagID"=> "654bd7784245f"
            ],
            [
            "name"=> "Tomasa Gallegos Antonio",
            "tagID"=> "654bd77843312"
            ],
            [
            "name"=> "Maximino Cerqueda Gallardo",
            "tagID"=> "654bd7784436a"
            ],
            [
            "name"=> "Pascual Vazquez Santos",
            "tagID"=> "654bd778451d9"
            ],
            [
            "name"=> "José Antonio Sánchez Carpinteyro",
            "tagID"=> "654bd7784657b"
            ],
            [
            "name"=> "Juan Carlos Galán Hernández",
            "tagID"=> "654bd77847444"
            ],
            [
            "name"=> "Enrique Rodríguez Lara",
            "tagID"=> "654bd778482ee"
            ],
            [
            "name"=> "Jaime Peñarrieta Ruíz",
            "tagID"=> "654bd7784945a"
            ],
            [
            "name"=> "Yaradith Urueña Prado",
            "tagID"=> "654bd7784a223"
            ],
            [
            "name"=> "Mario Escalante De los Santos",
            "tagID"=> "654bd7784af79"
            ],
            [
            "name"=> "Mauricio Alberto Robles Vargas",
            "tagID"=> "654bd7784bc1e"
            ],
            [
            "name"=> "Sergio Valencia Soto",
            "tagID"=> "654bd7784c94c"
            ],
            [
            "name"=> "Urbino Ripoll Hernández",
            "tagID"=> "654bd7784d738"
            ],
            [
            "name"=> "María de Lourdes Luján Beovide",
            "tagID"=> "654bd7784e64e"
            ],
            [
            "name"=> "Ricardo Román Andrade",
            "tagID"=> "654bd7784f4c3"
            ],
            [
            "name"=> "Jorge Barbabosa Sosa",
            "tagID"=> "654bd778502d9"
            ],
            [
            "name"=> "Didier Vivas Fajardo",
            "tagID"=> "654bd778512e4"
            ],
            [
            "name"=> "María Lucila Chávez Soler",
            "tagID"=> "654bd77852154"
            ],
            [
            "name"=> "Manuel Jesús Zavála Ávila",
            "tagID"=> "654bd77853002"
            ],
            [
            "name"=> "Alejandro Palomino Sánchez",
            "tagID"=> "654bd77853ee9"
            ],
            [
            "name"=> "María Teresa Mendoza Villegas",
            "tagID"=> "654bd77854f20"
            ],
            [
            "name"=> "Nancy Carolina Góngora Beltrán",
            "tagID"=> "654bd77855db5"
            ],
            [
            "name"=> "Kenia del Rosario Aguirre Gomez",
            "tagID"=> "654bd77856c0c"
            ],
            [
            "name"=> "Carol Dalia Medina Duarte",
            "tagID"=> "654bd77857ab6"
            ],
            [
            "name"=> "Manuel Castelán Fernández",
            "tagID"=> "654bd77858a03"
            ],
            [
            "name"=> "Evencio Hernández Burgos",
            "tagID"=> "654bd77859b9f"
            ],
            [
            "name"=> "Lilia Arguijo Jimenez",
            "tagID"=> "654bd7785ad48"
            ],
            [
            "name"=> "Karenn Rafaella Serrano Álvarez",
            "tagID"=> "654bd7785bfa0"
            ],
            [
            "name"=> "Virginia Abigail Velasco Juarez",
            "tagID"=> "654bd7785cfb1"
            ],
            [
            "name"=> "Jose Emilio Ramirez Perez",
            "tagID"=> "654bd7785df22"
            ],
            [
            "name"=> "Glenda Elizabeth Martínez Hernández",
            "tagID"=> "654bd7785ebfc"
            ],
            [
            "name"=> "Rubén Hernández Domínguez",
            "tagID"=> "654bd7785fbc3"
            ],
            [
            "name"=> "Juan Carlos Nicolás Álvarez Jonapa",
            "tagID"=> "654bd77860ac6"
            ],
            [
            "name"=> "Eugenio José Ytuarte Nuñez",
            "tagID"=> "654bd778618b3"
            ],
            [
            "name"=> "Alfredo Muñoz Olivera",
            "tagID"=> "654bd778627dd"
            ],
            [
            "name"=> "Rosa Berenice Perla Posada",
            "tagID"=> "654bd7786374a"
            ],
            [
            "name"=> "Jose Edwin Villanueva Ojeda",
            "tagID"=> "654bd77864487"
            ],
            [
            "name"=> "Luis Carlos Bates Méndez",
            "tagID"=> "654bd7786514a"
            ],
            [
            "name"=> "Paulina Trueba Villaseñor",
            "tagID"=> "654bd77865dea"
            ],
            [
            "name"=> "Pedro Luis Cruz Cu",
            "tagID"=> "654bd77866c5d"
            ],
            [
            "name"=> "Alfonso de Jesús Díaz Noveló",
            "tagID"=> "654bd77867aef"
            ],
            [
            "name"=> "Denise Rosalba Guzman Lara",
            "tagID"=> "654bd77868959"
            ],
            [
            "name"=> "Carlos Antonio Castillo Rosado",
            "tagID"=> "654bd778698fb"
            ],
            [
            "name"=> "José Antonio Aguilar Pérez",
            "tagID"=> "654bd7786a7d7"
            ],
            [
            "name"=> "Diego Armando López Rincón",
            "tagID"=> "654bd7786b982"
            ],
            [
            "name"=> "Jessica Guadalupe Jimenez Maza",
            "tagID"=> "654bd7786c8de"
            ],
            [
            "name"=> "Berenice Angélica Flores Martínez",
            "tagID"=> "654bd7786d88e"
            ],
            [
            "name"=> "Raul Limon Flores",
            "tagID"=> "654bd7786e843"
            ],
            [
            "name"=> "Liliana Marisol Santos Aguilar",
            "tagID"=> "654bd7786f85e"
            ],
            [
            "name"=> "Víctor Serrano López",
            "tagID"=> "654bd77870692"
            ],
            [
            "name"=> "Ana Cristina Ramirez Cortés",
            "tagID"=> "654bd77871518"
            ],
            [
            "name"=> "Maria del Rosario Soto Hernández",
            "tagID"=> "654bd77872393"
            ],
            [
            "name"=> "Gabriela López González",
            "tagID"=> "654bd778733c5"
            ],
            [
            "name"=> "Silvia America Paz Sandoval",
            "tagID"=> "654bd778743fd"
            ],
            [
            "name"=> "Marisol Márquez Leaño",
            "tagID"=> "654bd778752eb"
            ],
            [
            "name"=> "Carolina Samperio Perez",
            "tagID"=> "654bd77876173"
            ],
            [
            "name"=> "Tiburcio Martin Romero Mira",
            "tagID"=> "654bd778770b9"
            ],
            [
            "name"=> "Miguel Ángel Mora Mejía",
            "tagID"=> "654bd77878437"
            ],
            [
            "name"=> "Carlos Fernando Mosqueira Mondragón",
            "tagID"=> "654bd7787944a"
            ],
            [
            "name"=> "Carlos Enrique De la Paz Granja",
            "tagID"=> "654bd7787a457"
            ],
            [
            "name"=> "Jorge Luis Serrano Morales",
            "tagID"=> "654bd7787b39f"
            ],
            [
            "name"=> "Carla Yásmín López Cortés",
            "tagID"=> "654bd7787c1e6"
            ],
            [
            "name"=> "Olga Lilia Cerda Pineda",
            "tagID"=> "654bd7787d084"
            ],
            [
            "name"=> "Eloisa Janet Barreto Toledano",
            "tagID"=> "654bd7787dfb5"
            ],
            [
            "name"=> "Eduardo Alonso Pliego",
            "tagID"=> "654bd7787f7ce"
            ],
            [
            "name"=> "Alfredo Yeudiel Martinez Vazquez",
            "tagID"=> "654bd778811b8"
            ],
            [
            "name"=> "Selene Sanchez Lopez",
            "tagID"=> "654bd77882c44"
            ],
            [
            "name"=> "Sandra Isabel Núñez Barrera",
            "tagID"=> "654bd77884599"
            ],
            [
            "name"=> "Marilyn Julliet Romero Urbina",
            "tagID"=> "654bd77885d72"
            ],
            [
            "name"=> "Jazmin Gabriela Hernández Muñoz",
            "tagID"=> "654bd77886f80"
            ],
            [
            "name"=> "Belinda Leticia Arroyo Espinosa",
            "tagID"=> "654bd77888094"
            ],
            [
            "name"=> "Rafael Elías Serrano",
            "tagID"=> "654bd778891c3"
            ],
            [
            "name"=> "Carlos Arturo Cantillo Maza",
            "tagID"=> "654bd7788a847"
            ],
            [
            "name"=> "José Luis Elizondo Aragón",
            "tagID"=> "654bd7788bda6"
            ],
            [
            "name"=> "María Elizabeth Ayala Pérez",
            "tagID"=> "654bd7788d219"
            ],
            [
            "name"=> "Guillermo Enrique Muñoz Santiago",
            "tagID"=> "654bd7788e718"
            ],
            [
            "name"=> "Lina Luna Montes",
            "tagID"=> "654bd7788fa80"
            ],
            [
            "name"=> "María Sara Nepomuceno De Lázaro",
            "tagID"=> "654bd77890b01"
            ],
            [
            "name"=> "María Elena Rico Escamilla",
            "tagID"=> "654bd77891bb9"
            ],
            [
            "name"=> "Blanca Estela Téllez Jiménez",
            "tagID"=> "654bd77892d1e"
            ],
            [
            "name"=> "Carlos Rivera García",
            "tagID"=> "654bd77893eea"
            ],
            [
            "name"=> "José Pánfilo Medina Alonso",
            "tagID"=> "654bd77894f27"
            ],
            [
            "name"=> "Yoan Fausto Perez Oliva",
            "tagID"=> "654bd77895e07"
            ],
            [
            "name"=> "Carlos Abel Morales Gonzales",
            "tagID"=> "654bd77896cb5"
            ],
            [
            "name"=> "Iván Guerrero Ramírez",
            "tagID"=> "654bd77897b70"
            ],
            [
            "name"=> "Patricia Morales Salazar",
            "tagID"=> "654bd77898aca"
            ],
            [
            "name"=> "Gustavo Venegas Rosales",
            "tagID"=> "654bd77899937"
            ],
            [
            "name"=> "Adriana Hernández Mejía",
            "tagID"=> "654bd7789ad9f"
            ],
            [
            "name"=> "Alejandra Ivette Muench Spitzer",
            "tagID"=> "654bd7789bc55"
            ],
            [
            "name"=> "Alfonso Garay Espinosa",
            "tagID"=> "654bd7789cb1a"
            ],
            [
            "name"=> "Ana Karina Reyes García",
            "tagID"=> "654bd7789d980"
            ],
            [
            "name"=> "Víctor Manuel Sánchez Ortiz",
            "tagID"=> "654bd7789e77a"
            ],
            [
            "name"=> "Diana Verónica Delgado Delgado",
            "tagID"=> "654bd7789f678"
            ],
            [
            "name"=> "Rosendo Enrique Vázquez Contreras",
            "tagID"=> "654bd778a04c6"
            ],
            [
            "name"=> "Fedor Fernando López Villa",
            "tagID"=> "654bd778a14f0"
            ],
            [
            "name"=> "Carlos Eduardo Góngora Cárdenas",
            "tagID"=> "654bd778a227c"
            ],
            [
            "name"=> "Marisol Dorantes Gómez",
            "tagID"=> "654bd778a30ce"
            ],
            [
            "name"=> "Eduardo Armando León Tello",
            "tagID"=> "654bd778a3fe4"
            ],
            [
            "name"=> "Paulina Astatl Castellanos Aguilar",
            "tagID"=> "654bd778a5026"
            ],
            [
            "name"=> "Mónica Paola Mendoza Carlos",
            "tagID"=> "654bd778a609f"
            ],
            [
            "name"=> "Wendy Romero Lucas",
            "tagID"=> "654bd778a7294"
            ],
            [
            "name"=> "Martha Patricia Soto Ramos",
            "tagID"=> "654bd778a848e"
            ],
            [
            "name"=> "Sergio Arturo Echeverría Alarcón",
            "tagID"=> "654bd778a942b"
            ],
            [
            "name"=> "Mario Alfonso Sáinz Cázares",
            "tagID"=> "654bd778aa294"
            ],
            [
            "name"=> "Rodolfo López Garay",
            "tagID"=> "654bd778ab025"
            ],
            [
            "name"=> "Shugey Cabrera Corona",
            "tagID"=> "654bd778abdf8"
            ],
            [
            "name"=> "Hugo Sergio González Rosales",
            "tagID"=> "654bd778acbf3"
            ],
            [
            "name"=> "Alfonso Corona Téllez",
            "tagID"=> "654bd778ada57"
            ],
            [
            "name"=> "Francisco Antonio Mendizabal Bermúdez",
            "tagID"=> "654bd778ae8e8"
            ],
            [
            "name"=> "Jerónimo Colín Cano",
            "tagID"=> "654bd778af873"
            ],
            [
            "name"=> "Daniel Constantino Martínez Millán",
            "tagID"=> "654bd778b07b5"
            ],
            [
            "name"=> "Azucena Cortez Navarrete",
            "tagID"=> "654bd778b165e"
            ],
            [
            "name"=> "Edgar Salgado Carvajal",
            "tagID"=> "654bd778b24db"
            ],
            [
            "name"=> "Iván Rafael Aguirre Vázquez",
            "tagID"=> "654bd778b333d"
            ],
            [
            "name"=> "José Juan Rentería Morales",
            "tagID"=> "654bd778b41ed"
            ],
            [
            "name"=> "Francisco Castro Torres",
            "tagID"=> "654bd778b51ba"
            ],
            [
            "name"=> "Emiliano Galeana Arreola",
            "tagID"=> "654bd778b60d6"
            ],
            [
            "name"=> "Freddy Santos Mariscal",
            "tagID"=> "654bd778b6f16"
            ],
            [
            "name"=> "German Arquimides Garzón Barrientos",
            "tagID"=> "654bd778b7e54"
            ],
            [
            "name"=> "José Antonio Camacho Nogueda",
            "tagID"=> "654bd778b8e5b"
            ],
            [
            "name"=> "Heriberto Flores Carmona",
            "tagID"=> "654bd778b9e04"
            ],
            [
            "name"=> "Lucas Díaz Suárez",
            "tagID"=> "654bd778bad1c"
            ],
            [
            "name"=> "Luis Ángel Ayala Romero",
            "tagID"=> "654bd778bc34c"
            ],
            [
            "name"=> "Carlos Alberto Montero Uscanga",
            "tagID"=> "654bd778bd709"
            ],
            [
            "name"=> "María Del Carmen Contreras Alarcón",
            "tagID"=> "654bd778be85e"
            ],
            [
            "name"=> "Luis Antonio Jorge Zavala",
            "tagID"=> "654bd778bf8f4"
            ],
            [
            "name"=> "Sabino Vargas Espíritu",
            "tagID"=> "654bd778c0994"
            ],
            [
            "name"=> "Rafael Silva Barlandas",
            "tagID"=> "654bd778c1a42"
            ],
            [
            "name"=> "Rafael Aguirre Añorve",
            "tagID"=> "654bd778c29ba"
            ],
            [
            "name"=> "Respicio Montero Añorve",
            "tagID"=> "654bd778c3a67"
            ],
            [
            "name"=> "Román Pineda Abarca",
            "tagID"=> "654bd778c4b9e"
            ],
            [
            "name"=> "José Luis Balanzar Serna",
            "tagID"=> "654bd778c5cda"
            ],
            [
            "name"=> "Priscilla Sharaline Tejeda Ballhaus",
            "tagID"=> "654bd778c6ff1"
            ],
            [
            "name"=> "Jose Goben Arredondo Villanueva",
            "tagID"=> "654bd778c8259"
            ],
            [
            "name"=> "Ana Laura Luengas Sierra",
            "tagID"=> "654bd778c92f2"
            ],
            [
            "name"=> "Moises Sanchez Diaz",
            "tagID"=> "654bd778ca42d"
            ],
            [
            "name"=> "José Mauro Francisco Cabrera Andrade",
            "tagID"=> "654bd778cb53c"
            ],
            [
            "name"=> "Magdaleno Agustín Cabrera Andrade",
            "tagID"=> "654bd778cc4a8"
            ],
            [
            "name"=> "Adrían González García",
            "tagID"=> "654bd778cd32a"
            ],
            [
            "name"=> "Jesús Alejandro Grimaldi Carpio",
            "tagID"=> "654bd778cec61"
            ],
            [
            "name"=> "Alfonso Velasco Aznar",
            "tagID"=> "654bd778d0918"
            ],
            [
            "name"=> "Alfredo Aportela Abad",
            "tagID"=> "654bd778d1972"
            ],
            [
            "name"=> "José Alberto Cibrian Cruz",
            "tagID"=> "654bd778d2feb"
            ],
            [
            "name"=> "Daniel Espinosa Zúñiga",
            "tagID"=> "654bd778d3ffd"
            ],
            [
            "name"=> "Heriberto Antonio Arista Viveros",
            "tagID"=> "654bd778d50d8"
            ],
            [
            "name"=> "Eduardo Luna González",
            "tagID"=> "654bd778d6473"
            ],
            [
            "name"=> "Guadalupe Esperanza Ostos Ríos",
            "tagID"=> "654bd778d7b4f"
            ],
            [
            "name"=> "Gabriel Aguilar Piñón",
            "tagID"=> "654bd778d8f88"
            ],
            [
            "name"=> "Raúl Gardida Chavarría",
            "tagID"=> "654bd778da26a"
            ],
            [
            "name"=> "María de la Luz Álvarez Rosas",
            "tagID"=> "654bd778db47e"
            ],
            [
            "name"=> "Jorge Ariel Maya Perez",
            "tagID"=> "654bd778dc5f4"
            ],
            [
            "name"=> "Jorge Luis Duránd Ortíz",
            "tagID"=> "654bd778dd660"
            ],
            [
            "name"=> "José Luis Pinacho Velázquez",
            "tagID"=> "654bd778de879"
            ],
            [
            "name"=> "José Torrecilla Monzalvez",
            "tagID"=> "654bd778df7ce"
            ],
            [
            "name"=> "Octavio Agustín Hernández Palomares",
            "tagID"=> "654bd778e0791"
            ],
            [
            "name"=> "Martha Patricia Sandoval Andrade",
            "tagID"=> "654bd778e1835"
            ],
            [
            "name"=> "Mario Carlos García Cruz",
            "tagID"=> "654bd778e281c"
            ],
            [
            "name"=> "Augusto Miguel Contreras Montaño",
            "tagID"=> "654bd778e37d3"
            ],
            [
            "name"=> "Paris Sigifredo Córdoba Berman",
            "tagID"=> "654bd778e4803"
            ],
            [
            "name"=> "Verónica Bentata Medina",
            "tagID"=> "654bd778e5ce2"
            ],
            [
            "name"=> "María Guadalupe López Gómez",
            "tagID"=> "654bd778e6d8c"
            ],
            [
            "name"=> "Marcos Ricardo Vázquez Chavarría",
            "tagID"=> "654bd778e7d66"
            ],
            [
            "name"=> "Rafael Juan Sánchez Galícia",
            "tagID"=> "654bd778e8d41"
            ],
            [
            "name"=> "Gonzalo Manjarrez Hernandez",
            "tagID"=> "654bd778e9d97"
            ],
            [
            "name"=> "Oscar Bernal Nava",
            "tagID"=> "654bd778ead5b"
            ],
            [
            "name"=> "María Teresa Chavarría Jiménez",
            "tagID"=> "654bd778ebcfe"
            ],
            [
            "name"=> "Bertha Camacho Rogel",
            "tagID"=> "654bd778ece56"
            ],
            [
            "name"=> "José Luis Cruz Hernández",
            "tagID"=> "654bd778ee6df"
            ],
            [
            "name"=> "Norma Lilia Romero Mejía",
            "tagID"=> "654bd778ef96a"
            ],
            [
            "name"=> "Araceli Lara Muñoz",
            "tagID"=> "654bd778f0a7b"
            ],
            [
            "name"=> "Erick Francisco Estrada Rivas",
            "tagID"=> "654bd778f1a92"
            ],
            [
            "name"=> "Martha Olivares Vázquez",
            "tagID"=> "654bd778f2d52"
            ],
            [
            "name"=> "Manuel Aguilar Cancino",
            "tagID"=> "654bd778f3c17"
            ],
            [
            "name"=> "Manuel Ángel Leyva Ramírez",
            "tagID"=> "654bd7790078e"
            ],
            [
            "name"=> "Jorge Valfre Alvarado Vargas",
            "tagID"=> "654bd77901580"
            ],
            [
            "name"=> "Edgar Domínguez Arciniega",
            "tagID"=> "654bd7790253c"
            ],
            [
            "name"=> "Héctor Hernández Rivera",
            "tagID"=> "654bd77903324"
            ],
            [
            "name"=> "Mariel Arana Segura",
            "tagID"=> "654bd779040ca"
            ],
            [
            "name"=> "Jose Emmanuel Leyva Nava",
            "tagID"=> "654bd77904dff"
            ],
            [
            "name"=> "María de los Gozos Cisneros Rivero",
            "tagID"=> "654bd77905c78"
            ],
            [
            "name"=> "José Manuel Cuevas Alvarado",
            "tagID"=> "654bd77906b79"
            ],
            [
            "name"=> "José David Flores Botello",
            "tagID"=> "654bd77907bd7"
            ],
            [
            "name"=> "Javier Rodrigo Pantoja Espinoza",
            "tagID"=> "654bd77908db4"
            ],
            [
            "name"=> "Analia Palma Diaz",
            "tagID"=> "654bd77909e99"
            ],
            [
            "name"=> "Arely Gabriela Chavez Chavez",
            "tagID"=> "654bd7790aebb"
            ],
            [
            "name"=> "Araceli Espinoza Castillo",
            "tagID"=> "654bd7790bf49"
            ],
            [
            "name"=> "Carlos Manuel Lepe Olvera",
            "tagID"=> "654bd7790d0af"
            ],
            [
            "name"=> "Ericka Quirino Jiménez",
            "tagID"=> "654bd7790df1f"
            ],
            [
            "name"=> "Felipe Isaac Jiménez Pérez",
            "tagID"=> "654bd7790ee74"
            ],
            [
            "name"=> "Yolanda Aguirre Hernández",
            "tagID"=> "654bd7790fe36"
            ],
            [
            "name"=> "Héctor Manuel Fernández Madrid",
            "tagID"=> "654bd77910cf2"
            ],
            [
            "name"=> "Mario Alejandro Orozco García",
            "tagID"=> "654bd77911da3"
            ],
            [
            "name"=> "Francisco Daniel Cetina Leon",
            "tagID"=> "654bd77912f09"
            ],
            [
            "name"=> "Alejandro Pimentel Domínguez",
            "tagID"=> "654bd77913e0b"
            ],
            [
            "name"=> "Consuelo Guerrero Mengana",
            "tagID"=> "654bd77914dcc"
            ],
            [
            "name"=> "Luis Alfredo Domínguez Sansores",
            "tagID"=> "654bd779161c1"
            ],
            [
            "name"=> "Jesús Amancio González Jaime",
            "tagID"=> "654bd77917228"
            ],
            [
            "name"=> "César René Navarro Hernández",
            "tagID"=> "654bd779180d2"
            ],
            [
            "name"=> "Javier Ramírez Quiróz",
            "tagID"=> "654bd77918eef"
            ],
            [
            "name"=> "María del Carmen Paredes Martínez",
            "tagID"=> "654bd77919f46"
            ],
            [
            "name"=> "María Guadalupe López Nuñez",
            "tagID"=> "654bd7791b013"
            ],
            [
            "name"=> "Gilberto Morales Salgado",
            "tagID"=> "654bd7791bf7c"
            ],
            [
            "name"=> "Fernanda Aguilar Molina",
            "tagID"=> "654bd7791d0c1"
            ],
            [
            "name"=> "Ezer Cruz Rodriguez",
            "tagID"=> "654bd7791e0ec"
            ],
            [
            "name"=> "Miguel Ángel Cordero Miranda",
            "tagID"=> "654bd7791f122"
            ],
            [
            "name"=> "Xsiomara Moto Galván",
            "tagID"=> "654bd77920046"
            ],
            [
            "name"=> "Martha Abad Acosta",
            "tagID"=> "654bd77920f2d"
            ],
            [
            "name"=> "Patricia López González",
            "tagID"=> "654bd77922061"
            ],
            [
            "name"=> "Martha Ivette Anchondo Martinez",
            "tagID"=> "654bd779231e4"
            ],
            [
            "name"=> "Edgar Alonso Monroy Zuñiga",
            "tagID"=> "654bd7792437e"
            ],
            [
            "name"=> "Arturo Saldívar Santini",
            "tagID"=> "654bd779254ac"
            ],
            [
            "name"=> "Carlos Antonio Quiroga Serrano",
            "tagID"=> "654bd779266b0"
            ],
            [
            "name"=> "Julián Javier Meza Verdugo",
            "tagID"=> "654bd779279ad"
            ],
            [
            "name"=> "Irene Lucila Lozano Cárdenas",
            "tagID"=> "654bd77928bae"
            ],
            [
            "name"=> "Manuel Alejandro Tovar Rivera",
            "tagID"=> "654bd77929bdd"
            ],
            [
            "name"=> "Amanda Zoe Garcia Mendoza",
            "tagID"=> "654bd7792ab31"
            ],
            [
            "name"=> "Juan Israel Cruz Jerónimo",
            "tagID"=> "654bd7792bc6c"
            ],
            [
            "name"=> "Carlos Villalobos Pérez",
            "tagID"=> "654bd7792cf4d"
            ],
            [
            "name"=> "Julio César Faz Garza",
            "tagID"=> "654bd7792e108"
            ],
            [
            "name"=> "Alan Enrique León Chaparro",
            "tagID"=> "654bd7792f3cf"
            ],
            [
            "name"=> "Gerardo Alonso Jimenez Flores",
            "tagID"=> "654bd779304d8"
            ],
            [
            "name"=> "Tomás Gómez Tamayo",
            "tagID"=> "654bd77931328"
            ],
            [
            "name"=> "Daniela Reyes Ceceña",
            "tagID"=> "654bd779321f0"
            ],
            [
            "name"=> "Eulogio Muñoz Miranda",
            "tagID"=> "654bd779330bb"
            ],
            [
            "name"=> "Cristopher Efren Ruiz Vazquez",
            "tagID"=> "654bd77934058"
            ],
            [
            "name"=> "Jetzabel Anaid Michel Robles",
            "tagID"=> "654bd77934ec8"
            ],
            [
            "name"=> "Alejandro Alcantar Molina",
            "tagID"=> "654bd77935d1e"
            ],
            [
            "name"=> "Estela del Sagrario Velázquez Gutiérrez",
            "tagID"=> "654bd77936e1f"
            ],
            [
            "name"=> "Oscar Gerardo Cantu Rodriguez",
            "tagID"=> "654bd77937ef8"
            ],
            [
            "name"=> "Daniela Patricia Castelo Toledo",
            "tagID"=> "654bd77938ea4"
            ],
            [
            "name"=> "Ruben Rodriguez Armendariz",
            "tagID"=> "654bd77939c93"
            ],
            [
            "name"=> "Maricela Ávila Flores",
            "tagID"=> "654bd7793ab3f"
            ],
            [
            "name"=> "Abelardo Rojero Muñoz",
            "tagID"=> "654bd7793ba2b"
            ],
            [
            "name"=> "Andrés Abelino Fernández García",
            "tagID"=> "654bd7793c89e"
            ],
            [
            "name"=> "Luis Bernardo Raigosa Serrano",
            "tagID"=> "654bd7793d646"
            ],
            [
            "name"=> "Antonio Contestabile Del Mistro",
            "tagID"=> "654bd7793e2e0"
            ],
            [
            "name"=> "Gustavo Acosta Escarzaga",
            "tagID"=> "654bd7793f28d"
            ],
            [
            "name"=> "Laura Elena Acuña González",
            "tagID"=> "654bd779403b6"
            ],
            [
            "name"=> "Adria Belinda Berúmen Sánchez",
            "tagID"=> "654bd77941095"
            ],
            [
            "name"=> "Adrián Pérez Ramírez",
            "tagID"=> "654bd77941f08"
            ],
            [
            "name"=> "Adriana Adelina Soto González",
            "tagID"=> "654bd77942d01"
            ],
            [
            "name"=> "Jorge Santiago Guevara Torres",
            "tagID"=> "654bd77943a65"
            ],
            [
            "name"=> "Marco Antonio Aguilar Martínez",
            "tagID"=> "654bd77944728"
            ],
            [
            "name"=> "Aimeé Yazmín Ruiz Flores",
            "tagID"=> "654bd779453e7"
            ],
            [
            "name"=> "Alberto Casas Virgen",
            "tagID"=> "654bd779460aa"
            ],
            [
            "name"=> "José Alberto Esparza Luna",
            "tagID"=> "654bd77946e27"
            ],
            [
            "name"=> "Marco Antonio Alarcón Rivera",
            "tagID"=> "654bd77947c0d"
            ],
            [
            "name"=> "Ramón Alberto Angulo Rosas",
            "tagID"=> "654bd77948905"
            ],
            [
            "name"=> "Hector Alejandro Fernández Alcaraz",
            "tagID"=> "654bd7794962c"
            ],
            [
            "name"=> "Alejandro Ríos Aguirre",
            "tagID"=> "654bd7794a3a9"
            ],
            [
            "name"=> "Aleyda Zazueta Chávez",
            "tagID"=> "654bd7794b168"
            ],
            [
            "name"=> "José Manuel Alarid Ángeles",
            "tagID"=> "654bd7794bf53"
            ],
            [
            "name"=> "Bertha Alicia Estrada Villa",
            "tagID"=> "654bd7794cd56"
            ],
            [
            "name"=> "Alberto Alfonso De Luna González",
            "tagID"=> "654bd7794dbd5"
            ],
            [
            "name"=> "Alfredo Navar Saucedo",
            "tagID"=> "654bd7794eabc"
            ],
            [
            "name"=> "Alma Rosa Sánchez De la Vega",
            "tagID"=> "654bd7794f8b1"
            ],
            [
            "name"=> "Alma Alejandra Heredia Guzmán",
            "tagID"=> "654bd779507c2"
            ],
            [
            "name"=> "Alma Lorena Montoya López",
            "tagID"=> "654bd7795179a"
            ],
            [
            "name"=> "Alma Elena Treviño Alvarado",
            "tagID"=> "654bd77952651"
            ],
            [
            "name"=> "Alfonso Javier Marín Gómez",
            "tagID"=> "654bd779534f5"
            ],
            [
            "name"=> "Adán Almazán Mendoza",
            "tagID"=> "654bd7795431d"
            ],
            [
            "name"=> "Luis Lauro Lozano Montfort",
            "tagID"=> "654bd7795522a"
            ],
            [
            "name"=> "Angélica Iturburu Badillo",
            "tagID"=> "654bd779560b9"
            ],
            [
            "name"=> "Amelia Flores Quiróz",
            "tagID"=> "654bd7795708f"
            ],
            [
            "name"=> "Amarante Gutiérrez Martín",
            "tagID"=> "654bd77958237"
            ],
            [
            "name"=> "Alberto Molina Colmenarez",
            "tagID"=> "654bd77959170"
            ],
            [
            "name"=> "Angelina Contreras Herrera",
            "tagID"=> "654bd7795a00e"
            ],
            [
            "name"=> "Ángel Medina Zenteno",
            "tagID"=> "654bd7795b0c5"
            ],
            [
            "name"=> "Luis Antonio Bojórquez Zazueta",
            "tagID"=> "654bd7795c7ac"
            ],
            [
            "name"=> "Jose Antonio Carrillo Cuevas",
            "tagID"=> "654bd7795e5c8"
            ],
            [
            "name"=> "Juan Antonio Mota Ortega",
            "tagID"=> "654bd7795f707"
            ],
            [
            "name"=> "Jose Antonio Arellanes Reyes",
            "tagID"=> "654bd7796074f"
            ],
            [
            "name"=> "Armando Ramos Flores",
            "tagID"=> "654bd779616b1"
            ],
            [
            "name"=> "María Graciela Arroyo Orozco",
            "tagID"=> "654bd77962566"
            ],
            [
            "name"=> "Armin San Miguel Cadena",
            "tagID"=> "654bd779632c4"
            ],
            [
            "name"=> "Jesús Arturo Saldivar Martínez",
            "tagID"=> "654bd7796401d"
            ],
            [
            "name"=> "Rafael Aulis Campos",
            "tagID"=> "654bd77964d9c"
            ],
            [
            "name"=> "Jesús Francisco Ayala Ramos",
            "tagID"=> "654bd77965adc"
            ],
            [
            "name"=> "Raúl Balleza Aranda",
            "tagID"=> "654bd7796686e"
            ],
            [
            "name"=> "Benito Israel Blancarte Montoya",
            "tagID"=> "654bd7796752c"
            ],
            [
            "name"=> "Alberto González Elizondo",
            "tagID"=> "654bd7796828f"
            ],
            [
            "name"=> "Emma Beatríz Exiga González",
            "tagID"=> "654bd77968f84"
            ],
            [
            "name"=> "Bernardo Fierro Hernández",
            "tagID"=> "654bd77969ef4"
            ],
            [
            "name"=> "Carlos Ernesto Paredes Espinosa",
            "tagID"=> "654bd7796adee"
            ],
            [
            "name"=> "Brenda Janeth De Haro Hernández",
            "tagID"=> "654bd7796bb23"
            ],
            [
            "name"=> "Bronson Osório Martínez",
            "tagID"=> "654bd7796c7d9"
            ],
            [
            "name"=> "Carmen Alicia Sánchez Ramírez",
            "tagID"=> "654bd7796d507"
            ],
            [
            "name"=> "Carlos Ramón Patiño Jiménez",
            "tagID"=> "654bd7796e421"
            ],
            [
            "name"=> "María de la Soledad Calvo González",
            "tagID"=> "654bd7796f1ec"
            ],
            [
            "name"=> "Sergio Camacho Larios",
            "tagID"=> "654bd7796ff52"
            ],
            [
            "name"=> "Carlos Manuel Berrout Porras",
            "tagID"=> "654bd77970e6b"
            ],
            [
            "name"=> "Carlos Puentes Ruiz",
            "tagID"=> "654bd77971ca4"
            ],
            [
            "name"=> "Carlos Daniel Torres Luna",
            "tagID"=> "654bd77972b01"
            ],
            [
            "name"=> "Luis Carlos Luévano García",
            "tagID"=> "654bd7797397b"
            ],
            [
            "name"=> "Luis Carlos Porras Mendoza",
            "tagID"=> "654bd779748bf"
            ],
            [
            "name"=> "Emma Carolina Juarez Flores",
            "tagID"=> "654bd779757b1"
            ],
            [
            "name"=> "Carlos Alberto Siller Gutiérrez",
            "tagID"=> "654bd779765c6"
            ],
            [
            "name"=> "Carlos Emmanuel Chavez Sanchez",
            "tagID"=> "654bd77977465"
            ],
            [
            "name"=> "Carlos Martín Corral Chávez",
            "tagID"=> "654bd779785ea"
            ],
            [
            "name"=> "Raymundo Estrada Gómez",
            "tagID"=> "654bd77979520"
            ],
            [
            "name"=> "Cuauhtémoc Bojórquez Ascencio",
            "tagID"=> "654bd7797a580"
            ],
            [
            "name"=> "Carlos Humberto Salinas Salinas",
            "tagID"=> "654bd7797b574"
            ],
            [
            "name"=> "José Manuel Velasco Gutiérrez",
            "tagID"=> "654bd7797c448"
            ],
            [
            "name"=> "Manuel Ochoa Hernández",
            "tagID"=> "654bd7797d311"
            ],
            [
            "name"=> "Dora Alicia Carrera Reyna",
            "tagID"=> "654bd7797e109"
            ],
            [
            "name"=> "Elvia del Carmen León Olivares",
            "tagID"=> "654bd7797f294"
            ],
            [
            "name"=> "Rosario Figueroa Díaz",
            "tagID"=> "654bd77980263"
            ],
            [
            "name"=> "Jorge Alberto Álvarez Pineda",
            "tagID"=> "654bd7798123c"
            ],
            [
            "name"=> "María Del Rosario Graciano",
            "tagID"=> "654bd779821a1"
            ],
            [
            "name"=> "Jorge Arturo Campos Garza",
            "tagID"=> "654bd7798353a"
            ],
            [
            "name"=> "Abelardo Ibarra Rodriguez",
            "tagID"=> "654bd77984509"
            ],
            [
            "name"=> "Celeste María Botello Gámez",
            "tagID"=> "654bd7798650a"
            ],
            [
            "name"=> "Jorge Álvarez Lozoya",
            "tagID"=> "654bd7798742b"
            ],
            [
            "name"=> "César Ulises Víctor Barba Carrasco González",
            "tagID"=> "654bd77988296"
            ],
            [
            "name"=> "Carlos Gabriel Cisneros Medina",
            "tagID"=> "654bd7798930c"
            ],
            [
            "name"=> "César Garza González",
            "tagID"=> "654bd7798a2b3"
            ],
            [
            "name"=> "Jaime Chávez Curiel",
            "tagID"=> "654bd7798b1fc"
            ],
            [
            "name"=> "Norma Cipatli Ayuzo Del Valle",
            "tagID"=> "654bd7798c08f"
            ],
            [
            "name"=> "Brenda Cipres Cruces",
            "tagID"=> "654bd7798d18c"
            ],
            [
            "name"=> "Christian Enrique Charles Paramo",
            "tagID"=> "654bd7798e3f1"
            ],
            [
            "name"=> "Jesús Terán Álvarez",
            "tagID"=> "654bd7798f509"
            ],
            [
            "name"=> "Jesús Manuel González Ortíz",
            "tagID"=> "654bd77990751"
            ],
            [
            "name"=> "Dania Gonzalez Gonzalez",
            "tagID"=> "654bd77991731"
            ],
            [
            "name"=> "Claudia Dolores Jiménez Robles",
            "tagID"=> "654bd77992511"
            ],
            [
            "name"=> "Gonzálo Milán Gíl",
            "tagID"=> "654bd7799348b"
            ],
            [
            "name"=> "Rubén Olivares Jiménez",
            "tagID"=> "654bd77994412"
            ],
            [
            "name"=> "Maico Velázquez Islas",
            "tagID"=> "654bd77995283"
            ],
            [
            "name"=> "Pablo Bernardo Obregon Nava",
            "tagID"=> "654bd7799609e"
            ],
            [
            "name"=> "Erlinda Mabi Camacho Leyva",
            "tagID"=> "654bd77996ecd"
            ],
            [
            "name"=> "Román González Rubio",
            "tagID"=> "654bd77997d45"
            ],
            [
            "name"=> "Rubén Soto Zavala",
            "tagID"=> "654bd77998ae8"
            ],
            [
            "name"=> "David Alarid Coronel",
            "tagID"=> "654bd77999a35"
            ],
            [
            "name"=> "Alfonso Alvarez Hernandez",
            "tagID"=> "654bd7799a88a"
            ],
            [
            "name"=> "Manuel Alberto Valencia Castellanos",
            "tagID"=> "654bd7799b64c"
            ],
            [
            "name"=> "Alejandro Vicente Medrano Morlet",
            "tagID"=> "654bd7799c3d8"
            ],
            [
            "name"=> "Jesús Ernesto Brambila Benítez",
            "tagID"=> "654bd7799d1ab"
            ],
            [
            "name"=> "Ismaél Camacho Quintero",
            "tagID"=> "654bd7799dec4"
            ],
            [
            "name"=> "María Concepción González Valdéz",
            "tagID"=> "654bd7799ecd2"
            ],
            [
            "name"=> "Carlos Gabriel Rivera Villaseñor",
            "tagID"=> "654bd7799fb23"
            ],
            [
            "name"=> "César Alberto Lucio Ramírez",
            "tagID"=> "654bd779a09c4"
            ],
            [
            "name"=> "Luis Fernando Espinoza Gonzalez",
            "tagID"=> "654bd779a1931"
            ],
            [
            "name"=> "Víctor Manuel Covarrubias Nuñez",
            "tagID"=> "654bd779a287f"
            ],
            [
            "name"=> "Francisco Javier Flores Gaxiola",
            "tagID"=> "654bd779a3978"
            ],
            [
            "name"=> "Francisco Valdés Rodríguez",
            "tagID"=> "654bd779a49af"
            ],
            [
            "name"=> "Francisco Antonio Méndez García",
            "tagID"=> "654bd779a57b7"
            ],
            [
            "name"=> "Gabriel Martinez Gonzalez",
            "tagID"=> "654bd779a65d7"
            ],
            [
            "name"=> "Jaime Gallardo Camargo",
            "tagID"=> "654bd779a733b"
            ],
            [
            "name"=> "Mario Luis Pineda Maldonado",
            "tagID"=> "654bd779a8132"
            ],
            [
            "name"=> "David Pinales Fuentes",
            "tagID"=> "654bd779a9014"
            ],
            [
            "name"=> "Sergio Javier Fernández Ortiz",
            "tagID"=> "654bd779a9eb4"
            ],
            [
            "name"=> "Rigel Gerardo Loera Gutierrez",
            "tagID"=> "654bd779aae5f"
            ],
            [
            "name"=> "José Ignacio Cruz Rodríguez",
            "tagID"=> "654bd779abe67"
            ],
            [
            "name"=> "Dalia Guadalupe Olivares Bautista",
            "tagID"=> "654bd779accc8"
            ],
            [
            "name"=> "Luis Alfonso De Hoyos García",
            "tagID"=> "654bd779adaa1"
            ],
            [
            "name"=> "David Eugenio Sanchez Ramirez",
            "tagID"=> "654bd779ae8b3"
            ],
            [
            "name"=> "Carlos Mario Méndez Nieto",
            "tagID"=> "654bd779af74e"
            ],
            [
            "name"=> "Marcela Romero Alcaraz",
            "tagID"=> "654bd779b05cf"
            ],
            [
            "name"=> "Denisse Adriana De Osio Rojas",
            "tagID"=> "654bd779b1375"
            ],
            [
            "name"=> "Denisse Baez Lopez",
            "tagID"=> "654bd779b2237"
            ],
            [
            "name"=> "Dania Erika Quiñones Lopez",
            "tagID"=> "654bd779b30da"
            ],
            [
            "name"=> "Víctor Medina López",
            "tagID"=> "654bd779b3f33"
            ],
            [
            "name"=> "Adán Zuñiga Salazar",
            "tagID"=> "654bd779b4e53"
            ],
            [
            "name"=> "Abril Adriana Hernández Cisneros",
            "tagID"=> "654bd779b5ceb"
            ],
            [
            "name"=> "Adriana Cabrera Tijerina",
            "tagID"=> "654bd779b6ca6"
            ],
            [
            "name"=> "Gonzálo Torres Torres",
            "tagID"=> "654bd779b7b67"
            ],
            [
            "name"=> "Guadalupe Gricelda Álvarez Swarez",
            "tagID"=> "654bd779b8a0c"
            ],
            [
            "name"=> "Delia Márquez Barreto",
            "tagID"=> "654bd779b9a88"
            ],
            [
            "name"=> "Cecilia Del Carmen González Rosales",
            "tagID"=> "654bd779ba8d0"
            ],
            [
            "name"=> "Reynaldo Juan González Solís",
            "tagID"=> "654bd779bb763"
            ],
            [
            "name"=> "Miguel Contreras Flores",
            "tagID"=> "654bd779bc61f"
            ],
            [
            "name"=> "Elsa Ivette Garza Hinojosa",
            "tagID"=> "654bd779bd448"
            ],
            [
            "name"=> "Marco Vinicio Cházaro Flores",
            "tagID"=> "654bd779be25c"
            ],
            [
            "name"=> "Rosa María Sánchez Santillán",
            "tagID"=> "654bd779c09cc"
            ],
            [
            "name"=> "Juan Carlos Reyna Vázquez",
            "tagID"=> "654bd779c1fbd"
            ],
            [
            "name"=> "Argelia Hernández Mendoza",
            "tagID"=> "654bd779c3689"
            ],
            [
            "name"=> "Salvador Delgadillo Palacios",
            "tagID"=> "654bd779c4815"
            ],
            [
            "name"=> "Claudia Angélica Quezada Salazar",
            "tagID"=> "654bd779c5821"
            ],
            [
            "name"=> "Marisol Inzunza Balderas",
            "tagID"=> "654bd779c663f"
            ],
            [
            "name"=> "Ernestina Fernández Gómez",
            "tagID"=> "654bd779c7468"
            ],
            [
            "name"=> "Estela Abigail Zamudio González",
            "tagID"=> "654bd779c84fa"
            ],
            [
            "name"=> "Adriana Elisa Aguirre Elizalde",
            "tagID"=> "654bd779c9310"
            ],
            [
            "name"=> "Claudia Guillermina Ramírez Olvera",
            "tagID"=> "654bd779ca189"
            ],
            [
            "name"=> "Claudia Angélica Rivera Posada",
            "tagID"=> "654bd779cafcc"
            ],
            [
            "name"=> "Fabiola Edith Fernández Luna",
            "tagID"=> "654bd779cbdd6"
            ],
            [
            "name"=> "Elia Nohemi Hernández Camacho",
            "tagID"=> "654bd779cccf5"
            ],
            [
            "name"=> "Martín González López",
            "tagID"=> "654bd779cdd6c"
            ],
            [
            "name"=> "Miguel Ángel Tarín Aranda",
            "tagID"=> "654bd779cef2d"
            ],
            [
            "name"=> "Miguel Ángel Martínez Segovia",
            "tagID"=> "654bd779d00dd"
            ],
            [
            "name"=> "María Lucía León González",
            "tagID"=> "654bd779d11f8"
            ],
            [
            "name"=> "José Osbaldo Martínez Camacho",
            "tagID"=> "654bd779d23b7"
            ],
            [
            "name"=> "Carmen Graciela Maraveles Álvarez",
            "tagID"=> "654bd779d3e25"
            ],
            [
            "name"=> "Manuel Ochoa Tamez",
            "tagID"=> "654bd779d69b3"
            ],
            [
            "name"=> "Agustín Odón Luna Gutiérrez",
            "tagID"=> "654bd779d7c34"
            ],
            [
            "name"=> "Oscar Leonel Ibarra Soltero",
            "tagID"=> "654bd779d931a"
            ],
            [
            "name"=> "Dalila Martínez Tamez",
            "tagID"=> "654bd779da9c5"
            ],
            [
            "name"=> "Carlos Alberto Torres Preza",
            "tagID"=> "654bd779dbafd"
            ],
            [
            "name"=> "Enrique Guzmán Mejía",
            "tagID"=> "654bd779dccd2"
            ],
            [
            "name"=> "Marbella Medina Osuna",
            "tagID"=> "654bd779ddd73"
            ],
            [
            "name"=> "Leobardo Aldama Deciderio",
            "tagID"=> "654bd779dee08"
            ],
            [
            "name"=> "José Mendoza Graham",
            "tagID"=> "654bd779dfe01"
            ],
            [
            "name"=> "Ángel Enrique Batista García",
            "tagID"=> "654bd779e0d3e"
            ],
            [
            "name"=> "María Elena Mora Echegaray",
            "tagID"=> "654bd779e2349"
            ],
            [
            "name"=> "Ramiro Requejo Alvarado",
            "tagID"=> "654bd779e33af"
            ],
            [
            "name"=> "Aníbal Padilla Kaim",
            "tagID"=> "654bd779e4529"
            ],
            [
            "name"=> "Jose Alfonso Vazquez Morales",
            "tagID"=> "654bd779e56e3"
            ],
            [
            "name"=> "Norma Alicia Arreola Gómez",
            "tagID"=> "654bd779e686f"
            ],
            [
            "name"=> "Ricardo Eugenio Pérez Sánchez",
            "tagID"=> "654bd779e78e4"
            ],
            [
            "name"=> "Ricardo García Tovar",
            "tagID"=> "654bd779e89ae"
            ],
            [
            "name"=> "Magali Olave Moreno",
            "tagID"=> "654bd779e998c"
            ],
            [
            "name"=> "Ricardo Rojas Osuna",
            "tagID"=> "654bd779eac39"
            ],
            [
            "name"=> "Héctor Eduardo Arellano Romo",
            "tagID"=> "654bd779ebf0b"
            ],
            [
            "name"=> "Rosendo Gómez Galván",
            "tagID"=> "654bd779ed301"
            ],
            [
            "name"=> "Juan Carlos Rubí Carrizoza",
            "tagID"=> "654bd779ee758"
            ],
            [
            "name"=> "José Alfonso Sam Verdín",
            "tagID"=> "654bd779efa14"
            ],
            [
            "name"=> "Bertha Alicia González Solís",
            "tagID"=> "654bd779f0bc3"
            ],
            [
            "name"=> "Alejandro Santoyo Pérez",
            "tagID"=> "654bd779f1d29"
            ],
            [
            "name"=> "José Ángel Serapio Martínez",
            "tagID"=> "654bd779f2f16"
            ],
            [
            "name"=> "José Angel Topete Ponce",
            "tagID"=> "654bd779f4068"
            ],
            [
            "name"=> "Bernardo Adolfo Martínez Hinojosa",
            "tagID"=> "654bd77a00ef1"
            ],
            [
            "name"=> "Luis Manuel Valdés Nieblas",
            "tagID"=> "654bd77a02037"
            ],
            [
            "name"=> "Carlos Arturo Ramírez Rodríguez",
            "tagID"=> "654bd77a02fa6"
            ],
            [
            "name"=> "José Arturo Vela Staines",
            "tagID"=> "654bd77a03e4f"
            ],
            [
            "name"=> "Juan Carlos Cantú Elizondo",
            "tagID"=> "654bd77a05228"
            ],
            [
            "name"=> "Adolfo Verdugo López",
            "tagID"=> "654bd77a062bc"
            ],
            [
            "name"=> "Víctor Martín Quezada Trasviña",
            "tagID"=> "654bd77a0749b"
            ],
            [
            "name"=> "Carlos Alberto Martínez Vega",
            "tagID"=> "654bd77a084e4"
            ],
            [
            "name"=> "Víctor Manuel Corona Gómez",
            "tagID"=> "654bd77a093fe"
            ],
            [
            "name"=> "Marco Aurelio Castro Felix",
            "tagID"=> "654bd77a0a3eb"
            ],
            [
            "name"=> "Florencio Ernesto Almaguer Cárdenas",
            "tagID"=> "654bd77a0b41d"
            ],
            [
            "name"=> "Eusebio Ángulo Castellanos",
            "tagID"=> "654bd77a0cc3e"
            ],
            [
            "name"=> "Bruno Edgar Lopez Rivera",
            "tagID"=> "654bd77a0e41b"
            ],
            [
            "name"=> "Edgar Eusebio Aseff Córdova",
            "tagID"=> "654bd77a0fd26"
            ],
            [
            "name"=> "Daniel Casas Robles",
            "tagID"=> "654bd77a11514"
            ],
            [
            "name"=> "Edna Chugab Dermith Salazar",
            "tagID"=> "654bd77a12d3a"
            ],
            [
            "name"=> "Eduardo García Rodríguez",
            "tagID"=> "654bd77a13fb2"
            ],
            [
            "name"=> "Eduardo Llausas Magaña",
            "tagID"=> "654bd77a1509a"
            ],
            [
            "name"=> "Eduardo Javier Velasco Sánchez",
            "tagID"=> "654bd77a161f4"
            ],
            [
            "name"=> "Eldisa Guadalupe Fernández Duarte",
            "tagID"=> "654bd77a1740a"
            ],
            [
            "name"=> "Emma Nayeli López Gaitán",
            "tagID"=> "654bd77a185e9"
            ],
            [
            "name"=> "Jesús del Huerto David Domínguez Sosa",
            "tagID"=> "654bd77a19886"
            ],
            [
            "name"=> "Francisco Larios Arceo",
            "tagID"=> "654bd77a1ac49"
            ],
            [
            "name"=> "Gabriel Rodriguez Camelo",
            "tagID"=> "654bd77a1c2f4"
            ],
            [
            "name"=> "Francisco Garza De León",
            "tagID"=> "654bd77a1d790"
            ],
            [
            "name"=> "Juan Ricardo Garza Franco",
            "tagID"=> "654bd77a1e84b"
            ],
            [
            "name"=> "Gerardo Arturo Dávalos Cruz",
            "tagID"=> "654bd77a1fc61"
            ],
            [
            "name"=> "Gerardo Alarid Coronel",
            "tagID"=> "654bd77a20d2a"
            ],
            [
            "name"=> "Juan Antonio Caballero Ortiz",
            "tagID"=> "654bd77a21b93"
            ],
            [
            "name"=> "Hugo Salvador Hernandez Nieto",
            "tagID"=> "654bd77a22a62"
            ],
            [
            "name"=> "José Enrique Baltazar Guerrero",
            "tagID"=> "654bd77a23be5"
            ],
            [
            "name"=> "Jesús Humberto Tapia González",
            "tagID"=> "654bd77a24a90"
            ],
            [
            "name"=> "J. Jesús Ochoa Vargas",
            "tagID"=> "654bd77a2580a"
            ],
            [
            "name"=> "Jaime Norberto Morales Muñoz",
            "tagID"=> "654bd77a26505"
            ],
            [
            "name"=> "Enrique Rodríguez Barragán",
            "tagID"=> "654bd77a27342"
            ],
            [
            "name"=> "Jesús Silva Romo",
            "tagID"=> "654bd77a28658"
            ],
            [
            "name"=> "José Ojeda Martínez",
            "tagID"=> "654bd77a295b4"
            ],
            [
            "name"=> "Juan Jesús Peña Zamarrón",
            "tagID"=> "654bd77a2a46b"
            ],
            [
            "name"=> "Luis Alfredo Espinosa Cambero",
            "tagID"=> "654bd77a2b4dd"
            ],
            [
            "name"=> "Manuel Aarón Escalante López",
            "tagID"=> "654bd77a2c830"
            ],
            [
            "name"=> "Jorge Valdez Ceballos",
            "tagID"=> "654bd77a2d70a"
            ],
            [
            "name"=> "Esteban Mendoza Garza",
            "tagID"=> "654bd77a2e505"
            ],
            [
            "name"=> "Eduardo Teneyuque González",
            "tagID"=> "654bd77a2f33f"
            ],
            [
            "name"=> "Justo Enrique Villeda Cuéllar",
            "tagID"=> "654bd77a308f6"
            ],
            [
            "name"=> "Juan Jesús González López",
            "tagID"=> "654bd77a32258"
            ],
            [
            "name"=> "Leo Dan Isiordia Virgen",
            "tagID"=> "654bd77a33c68"
            ],
            [
            "name"=> "Alejandro Limón Cota",
            "tagID"=> "654bd77a35997"
            ],
            [
            "name"=> "Juan Julio Jara Quispe",
            "tagID"=> "654bd77a37404"
            ],
            [
            "name"=> "Severiano Loera Bernal",
            "tagID"=> "654bd77a391a9"
            ],
            [
            "name"=> "Javier López Morales Jr.",
            "tagID"=> "654bd77a3ac4f"
            ],
            [
            "name"=> "Rafael Paredes Rodríguez",
            "tagID"=> "654bd77a3c997"
            ],
            [
            "name"=> "Francisco Javier Escobar Navarro",
            "tagID"=> "654bd77a3e62e"
            ],
            [
            "name"=> "Manuel Alberto Flores Flores",
            "tagID"=> "654bd77a40637"
            ],
            [
            "name"=> "Fernando Javier Contreras Salazar",
            "tagID"=> "654bd77a42836"
            ],
            [
            "name"=> "Francisco Ornelas Cázares",
            "tagID"=> "654bd77a448d7"
            ],
            [
            "name"=> "Francisco Gerardo Lozano Lee",
            "tagID"=> "654bd77a46717"
            ],
            [
            "name"=> "Heriberto Fuentes García",
            "tagID"=> "654bd77a48384"
            ],
            [
            "name"=> "Francisco Jose Carrillo De la Mora",
            "tagID"=> "654bd77a4a31d"
            ],
            [
            "name"=> "Gabriel Cortes Castañeda",
            "tagID"=> "654bd77a4c2e7"
            ],
            [
            "name"=> "Gabriela Sereno Velázquez",
            "tagID"=> "654bd77a4e21d"
            ],
            [
            "name"=> "Gabriela Gurrola Lavalle",
            "tagID"=> "654bd77a4feca"
            ],
            [
            "name"=> "Gabriela Hernández Orta",
            "tagID"=> "654bd77a51ee3"
            ],
            [
            "name"=> "Beatríz Inés Cruz Guajardo",
            "tagID"=> "654bd77a53a90"
            ],
            [
            "name"=> "Guillermo Enrique García Quiróz",
            "tagID"=> "654bd77a55a0d"
            ],
            [
            "name"=> "Silvano Garate Ramírez",
            "tagID"=> "654bd77a575bd"
            ],
            [
            "name"=> "Osvaldo García Salazar",
            "tagID"=> "654bd77a595f8"
            ],
            [
            "name"=> "Jaime Castillo Ramos",
            "tagID"=> "654bd77a5b45c"
            ],
            [
            "name"=> "Genaro Garduza Zúñiga",
            "tagID"=> "654bd77a5d4ee"
            ],
            [
            "name"=> "Gerardo Ramón Ramos Pantoja",
            "tagID"=> "654bd77a5f159"
            ],
            [
            "name"=> "Gustavo Félix Beltrán",
            "tagID"=> "654bd77a612e7"
            ],
            [
            "name"=> "Gerardo de Jesús Gutiérrez Vargas",
            "tagID"=> "654bd77a631ec"
            ],
            [
            "name"=> "Gilberto Arrazola González",
            "tagID"=> "654bd77a64fea"
            ],
            [
            "name"=> "Gerardo López Avilés",
            "tagID"=> "654bd77a6693b"
            ],
            [
            "name"=> "María Virginia Gómez López",
            "tagID"=> "654bd77a6803b"
            ],
            [
            "name"=> "Gordon Bennett Vidales",
            "tagID"=> "654bd77a69bd1"
            ],
            [
            "name"=> "Manuel Guajardo Jáquez",
            "tagID"=> "654bd77a6af54"
            ],
            [
            "name"=> "José de Jesús Guerra Mendoza",
            "tagID"=> "654bd77a6bef5"
            ],
            [
            "name"=> "Gustavo Andrade Estrada",
            "tagID"=> "654bd77a6cff5"
            ],
            [
            "name"=> "Francisco Javier Saldaña Avendaño",
            "tagID"=> "654bd77a6df33"
            ],
            [
            "name"=> "José Ángel Trujíllo Rendón",
            "tagID"=> "654bd77a6ed90"
            ],
            [
            "name"=> "Jazmin Viridiana Jimenez Carballo",
            "tagID"=> "654bd77a6fc0b"
            ],
            [
            "name"=> "Francisco Javier Álvarez Rivas",
            "tagID"=> "654bd77a70afe"
            ],
            [
            "name"=> "Javier Osorio Nava",
            "tagID"=> "654bd77a71c1d"
            ],
            [
            "name"=> "Juan Enrique Cruz Ortiz",
            "tagID"=> "654bd77a72b1f"
            ],
            [
            "name"=> "Jorge Luis Díaz Moreno",
            "tagID"=> "654bd77a73ac3"
            ],
            [
            "name"=> "Jesús Manuel Esquer Suárez",
            "tagID"=> "654bd77a74984"
            ],
            [
            "name"=> "Jesus Manuel Armenta Velderrain",
            "tagID"=> "654bd77a75a1f"
            ],
            [
            "name"=> "Jesús Cardona González",
            "tagID"=> "654bd77a76773"
            ],
            [
            "name"=> "Jorge Francisco Zorrilla Osuna",
            "tagID"=> "654bd77a7759b"
            ],
            [
            "name"=> "Jesus Gutierrez Rojas",
            "tagID"=> "654bd77a78542"
            ],
            [
            "name"=> "Jesús Ernesto Valencia Córdova",
            "tagID"=> "654bd77a797bd"
            ],
            [
            "name"=> "Laura Velasco Castro",
            "tagID"=> "654bd77a7a7b0"
            ],
            [
            "name"=> "Alma Delia Guzmán Gallegos",
            "tagID"=> "654bd77a7b649"
            ],
            [
            "name"=> "Humberto Lara Aguayo",
            "tagID"=> "654bd77a7c564"
            ],
            [
            "name"=> "Juan Hernandez Flores",
            "tagID"=> "654bd77a7d5b0"
            ],
            [
            "name"=> "Héctor Adrián García Hernández",
            "tagID"=> "654bd77a7e442"
            ],
            [
            "name"=> "Héctor Ahumada Maldonado",
            "tagID"=> "654bd77a7f300"
            ],
            [
            "name"=> "Héctor Cabrera Rojas",
            "tagID"=> "654bd77a80048"
            ],
            [
            "name"=> "Héctor José Paras Gómez",
            "tagID"=> "654bd77a80d7d"
            ],
            [
            "name"=> "Hugo Sergio Tamayo Vega",
            "tagID"=> "654bd77a81e52"
            ],
            [
            "name"=> "Hugo Rolando Rentería Orozco",
            "tagID"=> "654bd77a82c47"
            ],
            [
            "name"=> "Jorge Humberto Delgado García",
            "tagID"=> "654bd77a83a63"
            ],
            [
            "name"=> "José Juan Alvarado Escobedo",
            "tagID"=> "654bd77a8491b"
            ],
            [
            "name"=> "J Jesús Lázaro Gutiérrez",
            "tagID"=> "654bd77a85b0d"
            ],
            [
            "name"=> "Jose Luis Bustamante Olea",
            "tagID"=> "654bd77a8698a"
            ],
            [
            "name"=> "José Luis Carbajal Paredes",
            "tagID"=> "654bd77a87940"
            ],
            [
            "name"=> "José Mario Turner Galán",
            "tagID"=> "654bd77a8896d"
            ],
            [
            "name"=> "Juan Manuel Flores Doria",
            "tagID"=> "654bd77a89adb"
            ],
            [
            "name"=> "José Francisco Vázquez Cuadras",
            "tagID"=> "654bd77a8a9bc"
            ],
            [
            "name"=> "Jorge Castro Acedo",
            "tagID"=> "654bd77a8b903"
            ],
            [
            "name"=> "José Luis Ibarra Rodríguez",
            "tagID"=> "654bd77a8c847"
            ],
            [
            "name"=> "Jorge Adrián Chuck Sepulveda",
            "tagID"=> "654bd77a8db3a"
            ],
            [
            "name"=> "Jorge Fabián Santana Venegas",
            "tagID"=> "654bd77a8ecde"
            ],
            [
            "name"=> "Jorge Alberto Martínez Favela",
            "tagID"=> "654bd77a8fdfd"
            ],
            [
            "name"=> "Jorge Pérez Lucio",
            "tagID"=> "654bd77a90fd1"
            ],
            [
            "name"=> "Jorge Antonio Rodríguez Mireles",
            "tagID"=> "654bd77a92292"
            ],
            [
            "name"=> "José Luis Gómez García",
            "tagID"=> "654bd77a93036"
            ],
            [
            "name"=> "José Ortíz Torres",
            "tagID"=> "654bd77a93dcd"
            ],
            [
            "name"=> "Javier Olivas Villagrán",
            "tagID"=> "654bd77a94bb1"
            ],
            [
            "name"=> "Jaime Gregorio Padilla Sencion",
            "tagID"=> "654bd77a95f7a"
            ],
            [
            "name"=> "José Gabriel Rosado Triay",
            "tagID"=> "654bd77a96f4a"
            ],
            [
            "name"=> "Juan Ramón Sauceda Avendaño",
            "tagID"=> "654bd77a97e3d"
            ],
            [
            "name"=> "Juan Manuel Ramírez Valdivia",
            "tagID"=> "654bd77a98ca3"
            ],
            [
            "name"=> "José Ramón Robles Elías",
            "tagID"=> "654bd77a99e2c"
            ],
            [
            "name"=> "Juan Manuel Gallaga Flores",
            "tagID"=> "654bd77a9ae9e"
            ],
            [
            "name"=> "Juan Jose Serrano Figueroa",
            "tagID"=> "654bd77a9be1d"
            ],
            [
            "name"=> "Ignacio Argandoña Torres",
            "tagID"=> "654bd77a9d40f"
            ],
            [
            "name"=> "Mario Alfonso Inzunza Castro",
            "tagID"=> "654bd77a9e787"
            ],
            [
            "name"=> "Ismaél David Piedra Noriega",
            "tagID"=> "654bd77a9f61f"
            ],
            [
            "name"=> "Ileana Reyes Guajardo",
            "tagID"=> "654bd77aa0444"
            ],
            [
            "name"=> "Rosaura Peña Saldívar",
            "tagID"=> "654bd77aa12b2"
            ],
            [
            "name"=> "Sergio Iván Michel Correa",
            "tagID"=> "654bd77aa2532"
            ],
            [
            "name"=> "Ivonne Delgado Herbert",
            "tagID"=> "654bd77aa355f"
            ],
            [
            "name"=> "José Luis Tostado Márquez",
            "tagID"=> "654bd77aa45f5"
            ],
            [
            "name"=> "Julián Alfonso Cota Contreras",
            "tagID"=> "654bd77aa5479"
            ],
            [
            "name"=> "Juan Manuel Ángel Sáenz",
            "tagID"=> "654bd77aa678a"
            ],
            [
            "name"=> "Juan Miguel Ochoa Lopez",
            "tagID"=> "654bd77aa74f3"
            ],
            [
            "name"=> "Juan Rafael Buelna López",
            "tagID"=> "654bd77aa825f"
            ],
            [
            "name"=> "Juana Juárez Madrigal",
            "tagID"=> "654bd77aa8eb7"
            ],
            [
            "name"=> "José Lorenzo Villalobos Gutiérrez",
            "tagID"=> "654bd77aa9eac"
            ],
            [
            "name"=> "Jesús Vargas Zepeda",
            "tagID"=> "654bd77aaaead"
            ],
            [
            "name"=> "Karene Marisol Perez Vargas",
            "tagID"=> "654bd77aabd55"
            ],
            [
            "name"=> "Maria Enriqueta Lugo Heredia",
            "tagID"=> "654bd77aacbb7"
            ],
            [
            "name"=> "Juan Eduardo Velázquez Martínez",
            "tagID"=> "654bd77aad9d0"
            ],
            [
            "name"=> "Eduardo Rodriguez Gardea",
            "tagID"=> "654bd77aaeb5d"
            ],
            [
            "name"=> "Zoila Lucia Lam Cobián",
            "tagID"=> "654bd77aaf92a"
            ],
            [
            "name"=> "Laura Elena Oseguera Martínez",
            "tagID"=> "654bd77ab071f"
            ],
            [
            "name"=> "Doris Berrones Espericueta",
            "tagID"=> "654bd77ab14e5"
            ],
            [
            "name"=> "Jesús Alberto Leal Castro",
            "tagID"=> "654bd77ab26a1"
            ],
            [
            "name"=> "Gerardo Enrique Ledesma Chacón",
            "tagID"=> "654bd77ab34b8"
            ],
            [
            "name"=> "Luis Eduardo García Lafarga",
            "tagID"=> "654bd77ab429e"
            ],
            [
            "name"=> "Lenin Francisco Castro Mendoza",
            "tagID"=> "654bd77ab50b8"
            ],
            [
            "name"=> "Luis Gerardo Flores Villanueva",
            "tagID"=> "654bd77ab60b7"
            ],
            [
            "name"=> "Luis Guillermo Ramírez Sánchez",
            "tagID"=> "654bd77ab70bd"
            ],
            [
            "name"=> "Lilia Fernandez Campaña",
            "tagID"=> "654bd77ab7f56"
            ],
            [
            "name"=> "Lilia García Escamilla",
            "tagID"=> "654bd77ab8df8"
            ],
            [
            "name"=> "Manuel Fabián Mora Valles",
            "tagID"=> "654bd77ab9d0e"
            ],
            [
            "name"=> "Miguel Angel Franco Cervantes",
            "tagID"=> "654bd77abafe7"
            ],
            [
            "name"=> "Lluvia del Carmen Hernandez Del Angel",
            "tagID"=> "654bd77abc78f"
            ],
            [
            "name"=> "Micaela Rosales Ontiveros",
            "tagID"=> "654bd77abe13e"
            ],
            [
            "name"=> "Lorenzo Morgan Avendaño",
            "tagID"=> "654bd77abfd62"
            ],
            [
            "name"=> "Miguel Ángel Álvarez Carreón",
            "tagID"=> "654bd77ac16bd"
            ],
            [
            "name"=> "Lourdes Martina Almaguer Tamez",
            "tagID"=> "654bd77ac323e"
            ],
            [
            "name"=> "Antonio Romero Saucedo",
            "tagID"=> "654bd77ac4b06"
            ],
            [
            "name"=> "Luis César Cantú Murillo",
            "tagID"=> "654bd77ac796f"
            ],
            [
            "name"=> "Luis Carlos Arroyo Quintana",
            "tagID"=> "654bd77aca57e"
            ],
            [
            "name"=> "Luis Rey Lopez Fragoso",
            "tagID"=> "654bd77acbeb8"
            ],
            [
            "name"=> "Miguel Ángel Bonal Pérez",
            "tagID"=> "654bd77acd7ed"
            ],
            [
            "name"=> "José Luis Macías Padilla",
            "tagID"=> "654bd77acf125"
            ],
            [
            "name"=> "María Magdalena Ramírez Méndez",
            "tagID"=> "654bd77ad08f0"
            ],
            [
            "name"=> "María Guadalupe Navarro Casados",
            "tagID"=> "654bd77ad1dad"
            ],
            [
            "name"=> "Martin Gerardo Salazar Salinas",
            "tagID"=> "654bd77ad2fd9"
            ],
            [
            "name"=> "Enrique Manzanares Navarro",
            "tagID"=> "654bd77ad459d"
            ],
            [
            "name"=> "Manuel Pérez Jiménez",
            "tagID"=> "654bd77ad59f5"
            ],
            [
            "name"=> "Manuel Garza Sánchez",
            "tagID"=> "654bd77ad6c04"
            ],
            [
            "name"=> "Marcelo Valdés Garza",
            "tagID"=> "654bd77ad7e6c"
            ],
            [
            "name"=> "Marco Antonio Batres Medina",
            "tagID"=> "654bd77ad8ffc"
            ],
            [
            "name"=> "Moisés Quiles Corona",
            "tagID"=> "654bd77ad9f5d"
            ],
            [
            "name"=> "María de Jesús Montoya Rubio",
            "tagID"=> "654bd77adad1e"
            ],
            [
            "name"=> "Martha Mónica Peña Garza",
            "tagID"=> "654bd77adbb10"
            ],
            [
            "name"=> "Miguel Ángel Muñoz Pineda",
            "tagID"=> "654bd77adc993"
            ],
            [
            "name"=> "José Manuel Montesinos Cisneros",
            "tagID"=> "654bd77add8bb"
            ],
            [
            "name"=> "Mario Alberto Saldaña López",
            "tagID"=> "654bd77ade701"
            ],
            [
            "name"=> "Mario Alberto Mendez Ortiz",
            "tagID"=> "654bd77adf543"
            ],
            [
            "name"=> "Mario Gutiérrez Castro",
            "tagID"=> "654bd77ae0496"
            ],
            [
            "name"=> "Mario René Alcorta García",
            "tagID"=> "654bd77ae174c"
            ],
            [
            "name"=> "Maria Eugenia Turner Larrinaga",
            "tagID"=> "654bd77ae2f33"
            ],
            [
            "name"=> "Marisela Esparza Rodríguez",
            "tagID"=> "654bd77ae45b1"
            ],
            [
            "name"=> "Adriana Ramirez Servin",
            "tagID"=> "654bd77ae5d81"
            ],
            [
            "name"=> "Marina Suárez Enríquez",
            "tagID"=> "654bd77ae72cb"
            ],
            [
            "name"=> "Claudia Mayela Aranda Saro",
            "tagID"=> "654bd77ae842e"
            ],
            [
            "name"=> "Mariana Guadalupe Camargo Morales",
            "tagID"=> "654bd77ae93ce"
            ],
            [
            "name"=> "Mayela Carmona Sáenz",
            "tagID"=> "654bd77aea241"
            ],
            [
            "name"=> "Angel Mario Gomez Davila",
            "tagID"=> "654bd77aeb30d"
            ],
            [
            "name"=> "Mayra Yuridia Mune Maldonado",
            "tagID"=> "654bd77aec24f"
            ],
            [
            "name"=> "Maricela Hernández Robles",
            "tagID"=> "654bd77aed6af"
            ],
            [
            "name"=> "Luis Fernando Castillo Figueroa",
            "tagID"=> "654bd77aee59e"
            ],
            [
            "name"=> "Jorge Villanueva Salinas",
            "tagID"=> "654bd77aef55d"
            ],
            [
            "name"=> "Nelly Elizabeth Andrade Moreno",
            "tagID"=> "654bd77af05d3"
            ],
            [
            "name"=> "Gerardo Arturo Nava Fuentes",
            "tagID"=> "654bd77af1551"
            ],
            [
            "name"=> "Jesus Alejandro Peña Gallegos",
            "tagID"=> "654bd77af2303"
            ],
            [
            "name"=> "Bernabé Darío Soto Gracia",
            "tagID"=> "654bd77af3005"
            ],
            [
            "name"=> "María del Rocío Moreno Galeana",
            "tagID"=> "654bd77af3e42"
            ],
            [
            "name"=> "Nidia Haydee Ruvalcaba Padilla",
            "tagID"=> "654bd77b009d5"
            ],
            [
            "name"=> "Juan Delfino Medina León",
            "tagID"=> "654bd77b015ca"
            ],
            [
            "name"=> "Daniel Cardenas Fernandez",
            "tagID"=> "654bd77b0230d"
            ],
            [
            "name"=> "Pavel Sosa Carrillo",
            "tagID"=> "654bd77b03037"
            ],
            [
            "name"=> "René Reséndiz Miranda",
            "tagID"=> "654bd77b03ddd"
            ],
            [
            "name"=> "Juan Bolívar Galeana",
            "tagID"=> "654bd77b04b6b"
            ],
            [
            "name"=> "Talia Conzuelo Gonzalez Fernandez",
            "tagID"=> "654bd77b0599d"
            ],
            [
            "name"=> "Nozzett Cristina Ocegueda Chavez",
            "tagID"=> "654bd77b068b1"
            ],
            [
            "name"=> "Enrique Gerardo Ortiz De la O",
            "tagID"=> "654bd77b0780f"
            ],
            [
            "name"=> "Salvador Vázquez Ortíz",
            "tagID"=> "654bd77b08829"
            ],
            [
            "name"=> "Olga Lilia Rivas Hernandez",
            "tagID"=> "654bd77b0965b"
            ],
            [
            "name"=> "Juan Ocampo Moreno",
            "tagID"=> "654bd77b0a565"
            ],
            [
            "name"=> "Ana Elena Navarrete Ordoñez",
            "tagID"=> "654bd77b0b41e"
            ],
            [
            "name"=> "José Ernesto León Córdova",
            "tagID"=> "654bd77b0c5f2"
            ],
            [
            "name"=> "Mitzi Monroy Molerez",
            "tagID"=> "654bd77b0d4a3"
            ],
            [
            "name"=> "Karla Priscila Vázquez Padilla",
            "tagID"=> "654bd77b0e327"
            ],
            [
            "name"=> "Ángel Vela González",
            "tagID"=> "654bd77b0f255"
            ],
            [
            "name"=> "Javier Mario Torres Cadena",
            "tagID"=> "654bd77b100a8"
            ],
            [
            "name"=> "Sergio Morales Conejo",
            "tagID"=> "654bd77b10f0c"
            ],
            [
            "name"=> "Omar Clemente Chavez Chaparro",
            "tagID"=> "654bd77b11d53"
            ],
            [
            "name"=> "Jose Orlando Beltrán Chanes",
            "tagID"=> "654bd77b12d60"
            ],
            [
            "name"=> "Jaime Orozco Pérez",
            "tagID"=> "654bd77b13c35"
            ],
            [
            "name"=> "Ramón Reyes Lara",
            "tagID"=> "654bd77b14ab3"
            ],
            [
            "name"=> "Pedro González Hernández",
            "tagID"=> "654bd77b15de3"
            ],
            [
            "name"=> "Estela María Robledo Conde",
            "tagID"=> "654bd77b16e2a"
            ],
            [
            "name"=> "Alma Patricia Salazar González",
            "tagID"=> "654bd77b17f4e"
            ],
            [
            "name"=> "Fernando Michel Penichet",
            "tagID"=> "654bd77b18e62"
            ],
            [
            "name"=> "José Martín Silva Fonseca",
            "tagID"=> "654bd77b19c97"
            ],
            [
            "name"=> "Luis Herrera Preciado",
            "tagID"=> "654bd77b1ac2d"
            ],
            [
            "name"=> "Oscar Gerardo Herrera Aguilera",
            "tagID"=> "654bd77b1bb45"
            ],
            [
            "name"=> "Pedro Limón Rodríguez",
            "tagID"=> "654bd77b1ca5a"
            ],
            [
            "name"=> "Jose Alfonso Quevedo Prieto",
            "tagID"=> "654bd77b1d89d"
            ],
            [
            "name"=> "Heriberto Pinto Aguilar",
            "tagID"=> "654bd77b1e761"
            ],
            [
            "name"=> "Rosalba Herrera Bartolo",
            "tagID"=> "654bd77b1f585"
            ],
            [
            "name"=> "Rosendo Valdéz De La Riva",
            "tagID"=> "654bd77b205b7"
            ],
            [
            "name"=> "Rolando Antonio Salas Mercado",
            "tagID"=> "654bd77b2152e"
            ],
            [
            "name"=> "Ruben Ruben Balderrama Davila",
            "tagID"=> "654bd77b222e4"
            ],
            [
            "name"=> "Luis Felipe Aceves Navarro",
            "tagID"=> "654bd77b23142"
            ],
            [
            "name"=> "Salvador Pulido Díaz",
            "tagID"=> "654bd77b24056"
            ],
            [
            "name"=> "Antero Porras Mendoza",
            "tagID"=> "654bd77b25079"
            ],
            [
            "name"=> "Raúl Abundis Reyna",
            "tagID"=> "654bd77b25f43"
            ],
            [
            "name"=> "Rafael Aguirre Romero",
            "tagID"=> "654bd77b273b0"
            ],
            [
            "name"=> "Rogelio Andrade Ahumada",
            "tagID"=> "654bd77b28df9"
            ],
            [
            "name"=> "Ramiro Vásquez Villalovos",
            "tagID"=> "654bd77b2a8fb"
            ],
            [
            "name"=> "José Raúl García Martín",
            "tagID"=> "654bd77b2c2ff"
            ],
            [
            "name"=> "Raúl Castañeda Bermúdez",
            "tagID"=> "654bd77b2dbb1"
            ],
            [
            "name"=> "Teresa de Jesús Sánchez Gil",
            "tagID"=> "654bd77b2ee07"
            ],
            [
            "name"=> "Sandra Guadalupe Solís Gutiérrez",
            "tagID"=> "654bd77b2ffb1"
            ],
            [
            "name"=> "Luis Alberto Contreras Zuñiga",
            "tagID"=> "654bd77b31343"
            ],
            [
            "name"=> "Severiano Leal Salinas",
            "tagID"=> "654bd77b324f3"
            ],
            [
            "name"=> "Sidney Guillermo Guillot Verdugo",
            "tagID"=> "654bd77b336a5"
            ],
            [
            "name"=> "Eduardo Antonio Reynosa Stenner",
            "tagID"=> "654bd77b34933"
            ],
            [
            "name"=> "Ricardo Javier Casas Mercado",
            "tagID"=> "654bd77b35a89"
            ],
            [
            "name"=> "Adelelmo López Ricardi",
            "tagID"=> "654bd77b36bcc"
            ],
            [
            "name"=> "Ricardo Acosta Rodríguez",
            "tagID"=> "654bd77b37d9a"
            ],
            [
            "name"=> "Rigoberto Carrasco Felix",
            "tagID"=> "654bd77b38f05"
            ],
            [
            "name"=> "Roberto Flores Santos",
            "tagID"=> "654bd77b3a1ac"
            ],
            [
            "name"=> "Roberto René Reyes González",
            "tagID"=> "654bd77b3b450"
            ],
            [
            "name"=> "Roberto Zazueta Tena",
            "tagID"=> "654bd77b3c699"
            ],
            [
            "name"=> "Rodolfo Javier Venegas Mesina",
            "tagID"=> "654bd77b3e019"
            ],
            [
            "name"=> "Roberto Hernández Raygoza",
            "tagID"=> "654bd77b3faae"
            ],
            [
            "name"=> "Roberto Ruben Zuñiga Muñoz",
            "tagID"=> "654bd77b416f3"
            ],
            [
            "name"=> "Silvestre Jesús Delgado Aguirre",
            "tagID"=> "654bd77b43350"
            ],
            [
            "name"=> "Rodrigo Alcides Aragón Mariscal",
            "tagID"=> "654bd77b44888"
            ],
            [
            "name"=> "Rodrígo Célis Pérez",
            "tagID"=> "654bd77b45a02"
            ],
            [
            "name"=> "Silvia Dolores Pérez Córdoba",
            "tagID"=> "654bd77b46fee"
            ],
            [
            "name"=> "Silvia Cano Enríquez",
            "tagID"=> "654bd77b481d6"
            ],
            [
            "name"=> "Enrique Rodríguez Esquivel",
            "tagID"=> "654bd77b49392"
            ],
            [
            "name"=> "Sofía Elena Villarreal Valdés",
            "tagID"=> "654bd77b4a552"
            ],
            [
            "name"=> "Alfonso Sosa Becerra",
            "tagID"=> "654bd77b4b60e"
            ],
            [
            "name"=> "Humberto Javier Soto Soto",
            "tagID"=> "654bd77b4c491"
            ],
            [
            "name"=> "Gerardo Soto Abraham",
            "tagID"=> "654bd77b4d28f"
            ],
            [
            "name"=> "Santiago Antonio Sibrian Vega",
            "tagID"=> "654bd77b4e164"
            ],
            [
            "name"=> "Juan Carlos Takasita Garza",
            "tagID"=> "654bd77b4f101"
            ],
            [
            "name"=> "Sandra Leticia Cervantes De Hoyos",
            "tagID"=> "654bd77b4ff2f"
            ],
            [
            "name"=> "Jesús Octavio Torres Jiménez",
            "tagID"=> "654bd77b50e0f"
            ],
            [
            "name"=> "Elia Thelma Pérez Rivera",
            "tagID"=> "654bd77b51cbf"
            ],
            [
            "name"=> "Ramón Tiberio Quezada Medrano",
            "tagID"=> "654bd77b52d9b"
            ],
            [
            "name"=> "María Teresa Medina Mendieta",
            "tagID"=> "654bd77b53c64"
            ],
            [
            "name"=> "Jaime Julio Unda Gómez",
            "tagID"=> "654bd77b54af8"
            ],
            [
            "name"=> "Víctor Manuel Cervantes Velázquez",
            "tagID"=> "654bd77b55970"
            ],
            [
            "name"=> "Héctor Vázquez Cavazos",
            "tagID"=> "654bd77b567b2"
            ],
            [
            "name"=> "Víctor Eduardo Galván Arellano",
            "tagID"=> "654bd77b577b9"
            ],
            [
            "name"=> "Teresa Elizabeth Vela Damken",
            "tagID"=> "654bd77b5854e"
            ],
            [
            "name"=> "Ana Patricia Méndez Fuentes",
            "tagID"=> "654bd77b59255"
            ],
            [
            "name"=> "Marcelo Alejandro Valdés Gíl",
            "tagID"=> "654bd77b59f14"
            ],
            [
            "name"=> "Víctor Hugo Portillo Araujo",
            "tagID"=> "654bd77b5ac7d"
            ],
            [
            "name"=> "Porfirio Peña Ortega",
            "tagID"=> "654bd77b5bac5"
            ],
            [
            "name"=> "Luis Villalobos García",
            "tagID"=> "654bd77b5c9c7"
            ],
            [
            "name"=> "Luis Fernando Villanueva Castro",
            "tagID"=> "654bd77b5dac3"
            ],
            [
            "name"=> "Víctor Manuel Piña Ceballos",
            "tagID"=> "654bd77b5e9ae"
            ],
            [
            "name"=> "Victor Manuel Serna Langarica",
            "tagID"=> "654bd77b5f877"
            ],
            [
            "name"=> "Xavier Alberto Gonzalez Gaona",
            "tagID"=> "654bd77b60715"
            ],
            [
            "name"=> "Luis Enrique Alatorre Montoya",
            "tagID"=> "654bd77b6157d"
            ],
            [
            "name"=> "Wendy Medina Rodríguez",
            "tagID"=> "654bd77b6240f"
            ],
            [
            "name"=> "Yeni Isabel Barboza Briones",
            "tagID"=> "654bd77b632e6"
            ],
            [
            "name"=> "Yisell Ayma Zuñiga",
            "tagID"=> "654bd77b640ea"
            ],
            [
            "name"=> "José Manuel Alanís Cajero",
            "tagID"=> "654bd77b6510c"
            ],
            [
            "name"=> "Alejandro Guerra Tamez",
            "tagID"=> "654bd77b6606d"
            ],
            [
            "name"=> "Zitlalic Hiramela García Salas",
            "tagID"=> "654bd77b66f42"
            ],
            [
            "name"=> "Manuel Irak Ojeda Leon",
            "tagID"=> "654bd77b67d98"
            ],
            [
            "name"=> "Julio Cesar Mosqueda Luján",
            "tagID"=> "654bd77b68ebb"
            ],
            [
            "name"=> "José Luis Nava Hernández",
            "tagID"=> "654bd77b6a1c2"
            ],
            [
            "name"=> "Georgina Piña Ruíz",
            "tagID"=> "654bd77b6b307"
            ],
            [
            "name"=> "Efraín Verdugo Verdugo",
            "tagID"=> "654bd77b6c58d"
            ],
            [
            "name"=> "Jose Rene Moreno Gomez",
            "tagID"=> "654bd77b6d492"
            ],
            [
            "name"=> "Claudia Jazmin Ochoa Chavez",
            "tagID"=> "654bd77b6e3e0"
            ],
            [
            "name"=> "Ana Laura Burgos Carvajal",
            "tagID"=> "654bd77b6f2c5"
            ],
            [
            "name"=> "Lorena Castañeda Hernández",
            "tagID"=> "654bd77b701f7"
            ],
            [
            "name"=> "Jesús Saúl Durán Nuño",
            "tagID"=> "654bd77b7128a"
            ],
            [
            "name"=> "Ana Cristina Quirarte Solano",
            "tagID"=> "654bd77b72211"
            ],
            [
            "name"=> "Leobardo Mora Morán",
            "tagID"=> "654bd77b7315c"
            ],
            [
            "name"=> "Victor Gerardo Sanchez Torres",
            "tagID"=> "654bd77b74081"
            ],
            [
            "name"=> "Marlene Susana Espinosa Rodriguez",
            "tagID"=> "654bd77b74ef5"
            ],
            [
            "name"=> "Jonathan Higgins Payán Díaz",
            "tagID"=> "654bd77b75d8a"
            ],
            [
            "name"=> "Emma Carolina Chaires Macías",
            "tagID"=> "654bd77b76c34"
            ],
            [
            "name"=> "Ilsee De Leon Barragan",
            "tagID"=> "654bd77b77c98"
            ],
            [
            "name"=> "Ignacia Villarreal Rodriguez",
            "tagID"=> "654bd77b78af9"
            ],
            [
            "name"=> "Gabriela Inzunza Manjarrez",
            "tagID"=> "654bd77b79876"
            ],
            [
            "name"=> "Luz Isabel Zamudio Santos",
            "tagID"=> "654bd77b7a6e9"
            ],
            [
            "name"=> "Fabiola Sanchez Michel",
            "tagID"=> "654bd77b7b541"
            ],
            [
            "name"=> "Diana Rubi De la Rosa Gonzalez",
            "tagID"=> "654bd77b7c546"
            ],
            [
            "name"=> "Martha Graciela Cardenas Sandoval",
            "tagID"=> "654bd77b7d59a"
            ],
            [
            "name"=> "Oscar Augusto Maldonado Vergara",
            "tagID"=> "654bd77b7e8ea"
            ],
            [
            "name"=> "Anely Nájera Rubio",
            "tagID"=> "654bd77b7f7e9"
            ],
            [
            "name"=> "Víctor Soto Torres Septien",
            "tagID"=> "654bd77b80a1f"
            ],
            [
            "name"=> "Omar Hernández Vargas",
            "tagID"=> "654bd77b81a47"
            ],
            [
            "name"=> "Lorenzo Alejandro Cruz García",
            "tagID"=> "654bd77b8298b"
            ],
            [
            "name"=> "Bibiana Marriaga Nuñez",
            "tagID"=> "654bd77b83957"
            ],
            [
            "name"=> "Susana Georgina Gallardo Robles",
            "tagID"=> "654bd77b848dd"
            ],
            [
            "name"=> "Michelle Castro Cárdenas",
            "tagID"=> "654bd77b856cc"
            ],
            [
            "name"=> "Jose Alfredo Gallegos Davila",
            "tagID"=> "654bd77b86dc0"
            ],
            [
            "name"=> "Margarito Jesús Ortíz Martínez",
            "tagID"=> "654bd77b888c0"
            ],
            [
            "name"=> "Martha Berenice Posada De Leon",
            "tagID"=> "654bd77b8a2c3"
            ],
            [
            "name"=> "Erika Guadalupe Leija López",
            "tagID"=> "654bd77b8bd1b"
            ],
            [
            "name"=> "Pablo Isaac Saucedo Martinez",
            "tagID"=> "654bd77b8d767"
            ],
            [
            "name"=> "Karina Margarita Cantu Sauceda",
            "tagID"=> "654bd77b8f5cc"
            ],
            [
            "name"=> "Marisol Fernández Mercado",
            "tagID"=> "654bd77b91680"
            ],
            [
            "name"=> "Arturo Muller Méndez",
            "tagID"=> "654bd77b9370a"
            ],
            [
            "name"=> "Roberto Humberto Galindo Ramírez",
            "tagID"=> "654bd77b95175"
            ],
            [
            "name"=> "Miguel Arturo Segura Delgadillo",
            "tagID"=> "654bd77b967d2"
            ],
            [
            "name"=> "José René Aguilar Angulo",
            "tagID"=> "654bd77b97b8d"
            ],
            [
            "name"=> "Carmina Alejandra Zaragoza Mendez",
            "tagID"=> "654bd77b98fac"
            ],
            [
            "name"=> "Paola Rabago Domingo",
            "tagID"=> "654bd77b9a26a"
            ],
            [
            "name"=> "José Martín Martínez Jaúregui",
            "tagID"=> "654bd77b9b602"
            ],
            [
            "name"=> "Olga Leticia Ramírez López",
            "tagID"=> "654bd77b9c569"
            ],
            [
            "name"=> "Jesús Pavel López Barrera",
            "tagID"=> "654bd77b9d3a9"
            ],
            [
            "name"=> "Alfredo Porras García",
            "tagID"=> "654bd77b9e29a"
            ],
            [
            "name"=> "Aníbal Padilla Ochoa",
            "tagID"=> "654bd77b9f15e"
            ],
            [
            "name"=> "Cynthia Berenice Chavana Mijares",
            "tagID"=> "654bd77b9ffed"
            ],
            [
            "name"=> "Dennis Lorena Martínez Bejarano",
            "tagID"=> "654bd77ba0dbc"
            ],
            [
            "name"=> "Diana Guadalupe Puente Sifuentes",
            "tagID"=> "654bd77ba1bc0"
            ],
            [
            "name"=> "Alejandro Solís Kuri",
            "tagID"=> "654bd77ba2a68"
            ],
            [
            "name"=> "Jesús Servando Rivera Peña",
            "tagID"=> "654bd77ba3868"
            ],
            [
            "name"=> "Jorge Eduardo Tapia López",
            "tagID"=> "654bd77ba46ba"
            ],
            [
            "name"=> "Luis Armando Barraza Nava",
            "tagID"=> "654bd77ba5503"
            ],
            [
            "name"=> "Marisol De Los Reyes Cárdenas",
            "tagID"=> "654bd77ba648c"
            ],
            [
            "name"=> "Héctor Alfredo Noyola Andazola",
            "tagID"=> "654bd77ba72a5"
            ],
            [
            "name"=> "Sofia Lopez de Arriaga Rojas",
            "tagID"=> "654bd77ba812b"
            ],
            [
            "name"=> "Elizabeth Martinez Porras",
            "tagID"=> "654bd77ba8f68"
            ],
            [
            "name"=> "Héctor Daniel Yáñez Gordillo",
            "tagID"=> "654bd77ba9dc9"
            ],
            [
            "name"=> "Eduardo Guadiana Villarreal",
            "tagID"=> "654bd77baabea"
            ],
            [
            "name"=> "Juan Carlos Félix Morales",
            "tagID"=> "654bd77babc11"
            ],
            [
            "name"=> "Fernando de Jesús Bodart Román",
            "tagID"=> "654bd77bac9e8"
            ],
            [
            "name"=> "Ana Rosa González Sánchez",
            "tagID"=> "654bd77bad85d"
            ],
            [
            "name"=> "Argelia Dardane Laredo Flores",
            "tagID"=> "654bd77bae686"
            ],
            [
            "name"=> "Gabriel Gonzalez Sosa",
            "tagID"=> "654bd77baf506"
            ],
            [
            "name"=> "Saul Hernandez Perez",
            "tagID"=> "654bd77bb03da"
            ],
            [
            "name"=> "Gabriela Cantú González",
            "tagID"=> "654bd77bb1474"
            ],
            [
            "name"=> "Carlos José Jaramillo Casanova",
            "tagID"=> "654bd77bb2396"
            ],
            [
            "name"=> "Lorena Maria Lerma Guerrero",
            "tagID"=> "654bd77bb3286"
            ],
            [
            "name"=> "Jonathan Flores Ruiz",
            "tagID"=> "654bd77bb40ae"
            ],
            [
            "name"=> "Mara Alejandra Cazares Bellazetin",
            "tagID"=> "654bd77bb4ec8"
            ],
            [
            "name"=> "Ana Margarita Martinez Roque",
            "tagID"=> "654bd77bb5cb4"
            ],
            [
            "name"=> "Jesus Manuel Magaña Ley",
            "tagID"=> "654bd77bb6b33"
            ],
            [
            "name"=> "Tania Yazmín Moreno Rocha",
            "tagID"=> "654bd77bb79b4"
            ],
            [
            "name"=> "Tania Marcela Sifuentes Aguilar",
            "tagID"=> "654bd77bb87ab"
            ],
            [
            "name"=> "Christian Zamora Taravelsi",
            "tagID"=> "654bd77bb9673"
            ],
            [
            "name"=> "Jesus Alan Chaparro Escudero",
            "tagID"=> "654bd77bba4b6"
            ],
            [
            "name"=> "Belda Erika Galicia Gonzalez",
            "tagID"=> "654bd77bbb379"
            ],
            [
            "name"=> "Guillermo García Andrade",
            "tagID"=> "654bd77bbc1a6"
            ],
            [
            "name"=> "Adad Yered Millán Hernández",
            "tagID"=> "654bd77bbcfb9"
            ],
            [
            "name"=> "Liliana Meza Mondragón",
            "tagID"=> "654bd77bbde8d"
            ],
            [
            "name"=> "Aitana Voirol García",
            "tagID"=> "654bd77bbedcd"
            ],
            [
            "name"=> "Alejandro Alcántar Pérez",
            "tagID"=> "654bd77bbfbfd"
            ],
            [
            "name"=> "Humberto Balderas Gaytán",
            "tagID"=> "654bd77bc0a42"
            ],
            [
            "name"=> "Carlos Vega Gómez",
            "tagID"=> "654bd77bc18c8"
            ],
            [
            "name"=> "Carlos Gustavo Murillo Cabrera",
            "tagID"=> "654bd77bc2794"
            ],
            [
            "name"=> "Raquel Sagrero Reyes",
            "tagID"=> "654bd77bc35c1"
            ],
            [
            "name"=> "José Luis Miranda Esquivel",
            "tagID"=> "654bd77bc43b3"
            ],
            [
            "name"=> "Edgar Francisco Florián Martínez",
            "tagID"=> "654bd77bc51bc"
            ],
            [
            "name"=> "Oscar Misael Gutiérrez Medrano",
            "tagID"=> "654bd77bc5fe4"
            ],
            [
            "name"=> "Javier Rosales Hueramo",
            "tagID"=> "654bd77bc74c5"
            ],
            [
            "name"=> "Jorge Alejandro Vázquez Narváez",
            "tagID"=> "654bd77bc860d"
            ],
            [
            "name"=> "Juan Gabriel Franco Tinoco",
            "tagID"=> "654bd77bc942b"
            ],
            [
            "name"=> "Jorge Enrique Estrada Carrillo",
            "tagID"=> "654bd77bca1f4"
            ],
            [
            "name"=> "Juan Pablo Martínez Hernández",
            "tagID"=> "654bd77bcb003"
            ],
            [
            "name"=> "Liliana Verenice Arroyo Cruz",
            "tagID"=> "654bd77bcbe48"
            ],
            [
            "name"=> "Luis Felipe Murillo Núñez",
            "tagID"=> "654bd77bcd11e"
            ],
            [
            "name"=> "Luis Manuel González Gómez",
            "tagID"=> "654bd77bce103"
            ],
            [
            "name"=> "Luis Raúl Betancourt Morales",
            "tagID"=> "654bd77bcf3fb"
            ],
            [
            "name"=> "Maria Eugenia Sánchez Gíl",
            "tagID"=> "654bd77bd0c90"
            ],
            [
            "name"=> "Alejandro González Ochoa",
            "tagID"=> "654bd77bd2715"
            ],
            [
            "name"=> "Luis Manuel Anaya García",
            "tagID"=> "654bd77bd423e"
            ],
            [
            "name"=> "Teresa Javier Martínez",
            "tagID"=> "654bd77bd5ee6"
            ],
            [
            "name"=> "Eugenio Pacelli Chávez Contreras",
            "tagID"=> "654bd77bd79fb"
            ],
            [
            "name"=> "Enrique Arzate Mejía",
            "tagID"=> "654bd77bd93c1"
            ],
            [
            "name"=> "Pompeyo Pérez Marín",
            "tagID"=> "654bd77bdad5b"
            ],
            [
            "name"=> "Roberto Carlos Maya Vargas",
            "tagID"=> "654bd77bdf05e"
            ],
            [
            "name"=> "Víctor Manuel Urbina Rincón",
            "tagID"=> "654bd77be09e0"
            ],
            [
            "name"=> "Raul De la Puente Murguia",
            "tagID"=> "654bd77be247d"
            ],
            [
            "name"=> "Edgar Adad Nieto Ruiz",
            "tagID"=> "654bd77be3aa8"
            ],
            [
            "name"=> "Mariana Jimena Diosdado Garcia",
            "tagID"=> "654bd77be5063"
            ],
            [
            "name"=> "Alfonso Mendoza Cendejas",
            "tagID"=> "654bd77be665c"
            ],
            [
            "name"=> "Liliana Elizabeth Martínez Reyna",
            "tagID"=> "654bd77be778e"
            ],
            [
            "name"=> "Jorge Luis Sánchez Victoria",
            "tagID"=> "654bd77be8933"
            ],
            [
            "name"=> "Miguel Ángel Aburto Chávez",
            "tagID"=> "654bd77be9946"
            ],
            [
            "name"=> "Teodoro Hernandez Estrada",
            "tagID"=> "654bd77beaa07"
            ],
            [
            "name"=> "María Luisa Ochoa Ortiz",
            "tagID"=> "654bd77bebc65"
            ],
            [
            "name"=> "Hilda Guadalupe Macias Ponce",
            "tagID"=> "654bd77becfd8"
            ],
            [
            "name"=> "Edgardo Zúñiga Alvarez",
            "tagID"=> "654bd77bee01e"
            ],
            [
            "name"=> "Guillermo Guerrero Rodríguez",
            "tagID"=> "654bd77bef3ab"
            ],
            [
            "name"=> "Melissa Mayela Burnes Quiroz",
            "tagID"=> "654bd77bf0762"
            ],
            [
            "name"=> "Christopher Alan Ferretiz Rocha",
            "tagID"=> "654bd77bf1b19"
            ],
            [
            "name"=> "Fabián Huerta Ramos",
            "tagID"=> "654bd77bf2e41"
            ],
            [
            "name"=> "Leonardo Navarro Felix",
            "tagID"=> "654bd77bf4182"
            ],
            [
            "name"=> "Yazmín Leyva Hernández",
            "tagID"=> "654bd77c01136"
            ],
            [
            "name"=> "Gicela del Carmen Tiscareño Ruvalcaba",
            "tagID"=> "654bd77c02216"
            ],
            [
            "name"=> "Bertha Alicia Mendoza Cárdenas",
            "tagID"=> "654bd77c032d8"
            ],
            [
            "name"=> "Vicente Muñiz Juárez",
            "tagID"=> "654bd77c043a1"
            ],
            [
            "name"=> "Francisco Antonio Pandeli Magaña",
            "tagID"=> "654bd77c05366"
            ],
            [
            "name"=> "Alfredo Cervantes Macías",
            "tagID"=> "654bd77c061a4"
            ],
            [
            "name"=> "Ricardo Davila Vargas",
            "tagID"=> "654bd77c070a8"
            ],
            [
            "name"=> "Rafael Eduardo Torres Lara",
            "tagID"=> "654bd77c07ee2"
            ],
            [
            "name"=> "José Joel Chávez Nevárez",
            "tagID"=> "654bd77c08e33"
            ],
            [
            "name"=> "Carlos Garcia Perez",
            "tagID"=> "654bd77c09e1d"
            ],
            [
            "name"=> "Álvaro Aguilera González",
            "tagID"=> "654bd77c0ad06"
            ],
            [
            "name"=> "Luis Rolando Pineda Amezcua",
            "tagID"=> "654bd77c0bd4e"
            ],
            [
            "name"=> "Ricardo Avalos Plata",
            "tagID"=> "654bd77c0cc3f"
            ],
            [
            "name"=> "Marisol Cabanillas Ayon",
            "tagID"=> "654bd77c0dc7b"
            ],
            [
            "name"=> "Saira Gaitán Martos",
            "tagID"=> "654bd77c0edcc"
            ],
            [
            "name"=> "Miguel Agustín Uranga Sánchez",
            "tagID"=> "654bd77c0fe33"
            ],
            [
            "name"=> "Sergio Cecilio Riestra Jiménez",
            "tagID"=> "654bd77c10efe"
            ],
            [
            "name"=> "Alejandro Rojas Amaya",
            "tagID"=> "654bd77c120e9"
            ],
            [
            "name"=> "Juan Pablo Gómez García",
            "tagID"=> "654bd77c130e3"
            ],
            [
            "name"=> "Johanna Giselle Zúñiga Hernández",
            "tagID"=> "654bd77c140f1"
            ],
            [
            "name"=> "Leticia Georgina García Campa",
            "tagID"=> "654bd77c15006"
            ],
            [
            "name"=> "José Armando González Cristopulos",
            "tagID"=> "654bd77c15f3e"
            ],
            [
            "name"=> "Enrique Octavio Félix Mendoza",
            "tagID"=> "654bd77c16e98"
            ],
            [
            "name"=> "Jesús Efraín Sánchez Sandoval",
            "tagID"=> "654bd77c17d37"
            ],
            [
            "name"=> "José Antonio González Chávez",
            "tagID"=> "654bd77c18ba6"
            ],
            [
            "name"=> "Juan Carlos Gutierrez Gonzalez",
            "tagID"=> "654bd77c19aec"
            ],
            [
            "name"=> "Sandrino Jose Fuentes Alfaro",
            "tagID"=> "654bd77c1aa1d"
            ],
            [
            "name"=> "Rubén Palestino Prudente",
            "tagID"=> "654bd77c1bbe6"
            ],
            [
            "name"=> "Manuel Enrique De la O Cavazos",
            "tagID"=> "654bd77c1ccc5"
            ],
            [
            "name"=> "Daniel Quintero Prado",
            "tagID"=> "654bd77c1dd38"
            ],
            [
            "name"=> "Salvador Romero Sánchez",
            "tagID"=> "654bd77c1eead"
            ],
            [
            "name"=> "Carlos Ulises Araiza Martinez",
            "tagID"=> "654bd77c1fe58"
            ],
            [
            "name"=> "Hernan Cortez Tristan",
            "tagID"=> "654bd77c20cb8"
            ],
            [
            "name"=> "Alfredo Castorena Bustamante",
            "tagID"=> "654bd77c21db6"
            ],
            [
            "name"=> "Edgard Grajeda Mata",
            "tagID"=> "654bd77c22cb4"
            ],
            [
            "name"=> "Rodolfo Boites Velarde",
            "tagID"=> "654bd77c23c9f"
            ],
            [
            "name"=> "Alma Rosa López Jiménez",
            "tagID"=> "654bd77c253b0"
            ],
            [
            "name"=> "José Alejandro González González",
            "tagID"=> "654bd77c26d93"
            ],
            [
            "name"=> "Adriana Bernarda Hernández Salas",
            "tagID"=> "654bd77c286f5"
            ],
            [
            "name"=> "Esmeralda Ramírez Godínez",
            "tagID"=> "654bd77c2a695"
            ],
            [
            "name"=> "Dulce Belén Cabrera Sandoval",
            "tagID"=> "654bd77c2c052"
            ],
            [
            "name"=> "María Guadalupe Alejos León",
            "tagID"=> "654bd77c2d91d"
            ],
            [
            "name"=> "Juan Antonio Veytia Alvarez",
            "tagID"=> "654bd77c2f236"
            ],
            [
            "name"=> "Francisco Javier Barrera Bravo",
            "tagID"=> "654bd77c30ca7"
            ],
            [
            "name"=> "Rodolfo Rincón Sánchez",
            "tagID"=> "654bd77c3271c"
            ],
            [
            "name"=> "Carlos Adrián Mercado Morales",
            "tagID"=> "654bd77c3390c"
            ],
            [
            "name"=> "Edna Elizabeth Meza Valle",
            "tagID"=> "654bd77c34ab3"
            ],
            [
            "name"=> "María del Carmen Sepulveda Orozco",
            "tagID"=> "654bd77c35d1c"
            ],
            [
            "name"=> "Daniela Perez Trujillo",
            "tagID"=> "654bd77c36fcc"
            ],
            [
            "name"=> "Salvador Flores Rubio",
            "tagID"=> "654bd77c38161"
            ],
            [
            "name"=> "Rey Jesus Hernandez Zuñiga",
            "tagID"=> "654bd77c3937c"
            ],
            [
            "name"=> "Héctor Rolando Muzquiz Reyes",
            "tagID"=> "654bd77c3a6ad"
            ],
            [
            "name"=> "Carlos Roel Sordo",
            "tagID"=> "654bd77c3b718"
            ],
            [
            "name"=> "Christian Alejandro Lara Hernandez",
            "tagID"=> "654bd77c3c75d"
            ],
            [
            "name"=> "Efren Hugo Arroyo Orduño",
            "tagID"=> "654bd77c3d7cd"
            ],
            [
            "name"=> "Raymundo Alan Castro Bravo",
            "tagID"=> "654bd77c3ea6a"
            ],
            [
            "name"=> "Baruc Gómez Hernández",
            "tagID"=> "654bd77c3fc8f"
            ],
            [
            "name"=> "Mario Adalberto Arredondo Briones",
            "tagID"=> "654bd77c40d6f"
            ],
            [
            "name"=> "Eduardo Isaac Rodriguez Rodriguez",
            "tagID"=> "654bd77c41e01"
            ],
            [
            "name"=> "David Martínez Ruíz",
            "tagID"=> "654bd77c42ef1"
            ],
            [
            "name"=> "Arnulfo Macías Balleza",
            "tagID"=> "654bd77c4448b"
            ],
            [
            "name"=> "Jesús Salvador Sánchez Santibáñez",
            "tagID"=> "654bd77c45419"
            ],
            [
            "name"=> "Amaranta Del Carmen Agraz Casillas",
            "tagID"=> "654bd77c46258"
            ],
            [
            "name"=> "Ana Maria Silva Guerrero",
            "tagID"=> "654bd77c470ab"
            ],
            [
            "name"=> "Juan Eduardo Diaz Peña",
            "tagID"=> "654bd77c4807e"
            ],
            [
            "name"=> "María Guadalupe López Martínez",
            "tagID"=> "654bd77c49057"
            ],
            [
            "name"=> "Francisco de Asis Ibarra Hernández",
            "tagID"=> "654bd77c49fed"
            ],
            [
            "name"=> "Alexia Gisselle Vargas Rodriguez",
            "tagID"=> "654bd77c4ae6f"
            ],
            [
            "name"=> "José Alberto León Sotelo",
            "tagID"=> "654bd77c4bc39"
            ],
            [
            "name"=> "Jesús Héctor Casanova Pérez",
            "tagID"=> "654bd77c4cabc"
            ],
            [
            "name"=> "Raymundo Sandoval Guerrero",
            "tagID"=> "654bd77c4da70"
            ],
            [
            "name"=> "Aracely Acosta López",
            "tagID"=> "654bd77c4e91e"
            ],
            [
            "name"=> "Lucero Beatriz Campos Felix",
            "tagID"=> "654bd77c4f78b"
            ],
            [
            "name"=> "Rodolfo Antonio Espinoza Plana",
            "tagID"=> "654bd77c505e7"
            ],
            [
            "name"=> "Silvia Valenzuela Taylor",
            "tagID"=> "654bd77c51475"
            ],
            [
            "name"=> "Ana Cecilia Chena Sánchez",
            "tagID"=> "654bd77c52232"
            ],
            [
            "name"=> "Eva Paulina Armas Quiroz",
            "tagID"=> "654bd77c52ff5"
            ],
            [
            "name"=> "Mayra Elizabeth Díaz Castillo",
            "tagID"=> "654bd77c53e4f"
            ],
            [
            "name"=> "Carmen Angelica Rentería López",
            "tagID"=> "654bd77c54c73"
            ],
            [
            "name"=> "Aurora Elizabeth Santana Gómez",
            "tagID"=> "654bd77c55a47"
            ],
            [
            "name"=> "Alejandra Ureña Ascencio",
            "tagID"=> "654bd77c5699f"
            ],
            [
            "name"=> "María del Rocío Estrada Torres",
            "tagID"=> "654bd77c57936"
            ],
            [
            "name"=> "Juan Pablo Romo Gamboa",
            "tagID"=> "654bd77c58784"
            ],
            [
            "name"=> "Martha Adriana Sanchez Ramirez",
            "tagID"=> "654bd77c596b2"
            ],
            [
            "name"=> "Arturo Emmanuel Sámano Caldelas",
            "tagID"=> "654bd77c5a687"
            ],
            [
            "name"=> "Raúl Soria Villa",
            "tagID"=> "654bd77c5b4d8"
            ],
            [
            "name"=> "Alejandra Espinosa Aguilera",
            "tagID"=> "654bd77c5c375"
            ],
            [
            "name"=> "Juan Bosco Melo Pedraza",
            "tagID"=> "654bd77c5d224"
            ],
            [
            "name"=> "Ilsi Murillo Rangel",
            "tagID"=> "654bd77c5e041"
            ],
            [
            "name"=> "Jorge Herrera Gomez",
            "tagID"=> "654bd77c5ee33"
            ],
            [
            "name"=> "Rafael Eduardo Alcaraz Argumedo",
            "tagID"=> "654bd77c5fc49"
            ],
            [
            "name"=> "Francisco Vargas Saucedo",
            "tagID"=> "654bd77c60b25"
            ],
            [
            "name"=> "Maria de Lourdes Carolina Miranda Flores",
            "tagID"=> "654bd77c61976"
            ],
            [
            "name"=> "Jorge Alberto Macias Flores",
            "tagID"=> "654bd77c627b1"
            ],
            [
            "name"=> "Francisco Javier Salazar Grijalva",
            "tagID"=> "654bd77c635ef"
            ],
            [
            "name"=> "Juan José González Miranda",
            "tagID"=> "654bd77c647e8"
            ],
            [
            "name"=> "Miguel Angel Cuevas Vargas",
            "tagID"=> "654bd77c6572f"
            ],
            [
            "name"=> "Gerson Madrigal Cedillo",
            "tagID"=> "654bd77c66692"
            ],
            [
            "name"=> "Jesus Aquilino Verdugo Bernal",
            "tagID"=> "654bd77c6767c"
            ],
            [
            "name"=> "Leticia Sara Rosas Suárez",
            "tagID"=> "654bd77c686f2"
            ],
            [
            "name"=> "Miguel Ángel Contreras Rodríguez",
            "tagID"=> "654bd77c696b7"
            ],
            [
            "name"=> "Alberto Orozco Gutiérrez",
            "tagID"=> "654bd77c6a58c"
            ],
            [
            "name"=> "Jesús Ramírez Domínguez",
            "tagID"=> "654bd77c6b322"
            ],
            [
            "name"=> "Juan Luis Cruz Juárez",
            "tagID"=> "654bd77c6c337"
            ],
            [
            "name"=> "Beatriz Mendoza Ruelas",
            "tagID"=> "654bd77c6d446"
            ],
            [
            "name"=> "Miguel Ángel Cantón Arenas",
            "tagID"=> "654bd77c6e408"
            ],
            [
            "name"=> "Vicente Alfonso Huerta Pérez",
            "tagID"=> "654bd77c6f3e9"
            ],
            [
            "name"=> "María Guadalupe Chávez Martínez",
            "tagID"=> "654bd77c70254"
            ],
            [
            "name"=> "Luz María Brena García",
            "tagID"=> "654bd77c712ab"
            ],
            [
            "name"=> "Mayra Delgado Ayala",
            "tagID"=> "654bd77c720cb"
            ],
            [
            "name"=> "María Del Rocío Porras Calderón",
            "tagID"=> "654bd77c72d97"
            ],
            [
            "name"=> "Amador Armando Pereira Díaz",
            "tagID"=> "654bd77c73ac0"
            ],
            [
            "name"=> "Roberto Camargo Hernández",
            "tagID"=> "654bd77c7475f"
            ],
            [
            "name"=> "Antonio Vega Valdés",
            "tagID"=> "654bd77c75471"
            ],
            [
            "name"=> "Reyna Alejandra Vargas Flores",
            "tagID"=> "654bd77c76180"
            ],
            [
            "name"=> "Enrique Ruiz Cardenas",
            "tagID"=> "654bd77c76e3d"
            ],
            [
            "name"=> "J Guadalupe Arturo Ambriz Maldonado",
            "tagID"=> "654bd77c77c1a"
            ],
            [
            "name"=> "Jazmín Verenice Jiménez Vázquez",
            "tagID"=> "654bd77c78a99"
            ],
            [
            "name"=> "Juan Carlos Martinez Ruiz",
            "tagID"=> "654bd77c79952"
            ],
            [
            "name"=> "René Licea Claverie",
            "tagID"=> "654bd77c7a6ae"
            ],
            [
            "name"=> "Jose Guadalupe Jaramillo Alvarado",
            "tagID"=> "654bd77c7b561"
            ],
            [
            "name"=> "Ivette Huerta Niño de Rivera",
            "tagID"=> "654bd77c7c3ec"
            ],
            [
            "name"=> "José Luis Serrano Gasca",
            "tagID"=> "654bd77c7d235"
            ],
            [
            "name"=> "Miguel Angel Juarez Garcia",
            "tagID"=> "654bd77c7e0be"
            ],
            [
            "name"=> "Ana Paola Muñoz De la Cruz",
            "tagID"=> "654bd77c7f374"
            ],
            [
            "name"=> "Antonio Calderon Moore",
            "tagID"=> "654bd77c8024f"
            ],
            [
            "name"=> "Ismael Medina Orozco",
            "tagID"=> "654bd77c8111b"
            ],
            [
            "name"=> "José de Jesús Gutiérrez Escobedo",
            "tagID"=> "654bd77c82018"
            ],
            [
            "name"=> "Narciso Bautista Olvera",
            "tagID"=> "654bd77c82ef1"
            ],
            [
            "name"=> "Claudia Fragoso Barrera",
            "tagID"=> "654bd77c83d30"
            ],
            [
            "name"=> "Gabriel Alejandro Jaimes Brambila",
            "tagID"=> "654bd77c84c83"
            ],
            [
            "name"=> "Blanca Estela Aguilar Gil",
            "tagID"=> "654bd77c85b4b"
            ],
            [
            "name"=> "José Luis Pasarin Montes",
            "tagID"=> "654bd77c869f8"
            ],
            [
            "name"=> "Paloma Arenas Rojas",
            "tagID"=> "654bd77c878e0"
            ],
            [
            "name"=> "Juan Carlos Rivera Rebolledo",
            "tagID"=> "654bd77c8878a"
            ],
            [
            "name"=> "Efrain Velasco Luis",
            "tagID"=> "654bd77c89603"
            ],
            [
            "name"=> "Carina Gabriel Suarez",
            "tagID"=> "654bd77c8a5ec"
            ],
            [
            "name"=> "Beatríz Cristina Herrera Castillo",
            "tagID"=> "654bd77c8b42f"
            ],
            [
            "name"=> "Juan Rodrigo Osegueda Mayen",
            "tagID"=> "654bd77c8c239"
            ],
            [
            "name"=> "Rocío Lilián Esparza Anaya",
            "tagID"=> "654bd77c8d06b"
            ],
            [
            "name"=> "Alejandra Garcia Gonzalez",
            "tagID"=> "654bd77c8e209"
            ],
            [
            "name"=> "Pedro Durán Hernández",
            "tagID"=> "654bd77c8f249"
            ],
            [
            "name"=> "Teresita Parra Tello",
            "tagID"=> "654bd77c90159"
            ],
            [
            "name"=> "José Guadalupe Navarro Segura",
            "tagID"=> "654bd77c91238"
            ],
            [
            "name"=> "José Pruneda Dibildox",
            "tagID"=> "654bd77c92411"
            ],
            [
            "name"=> "Armando Colunga Dávila",
            "tagID"=> "654bd77c9333f"
            ],
            [
            "name"=> "Mayra Idialia Alfaro Díaz de León",
            "tagID"=> "654bd77c941cb"
            ],
            [
            "name"=> "Guillermo Ramón Franco Del Río",
            "tagID"=> "654bd77c9515b"
            ],
            [
            "name"=> "Francísco Jesús Escalante Padrón",
            "tagID"=> "654bd77c9612c"
            ],
            [
            "name"=> "Moisés González Gallardo",
            "tagID"=> "654bd77c9700d"
            ],
            [
            "name"=> "Epifanio Angeles Molina",
            "tagID"=> "654bd77c97e1d"
            ],
            [
            "name"=> "Laura Cruz Navarro",
            "tagID"=> "654bd77c98c6b"
            ],
            [
            "name"=> "Elvia Verónica Cázares Moreno",
            "tagID"=> "654bd77c99cdc"
            ],
            [
            "name"=> "Benigno Trejo Montes",
            "tagID"=> "654bd77c9abe4"
            ],
            [
            "name"=> "Maria Soledad Galván Luna",
            "tagID"=> "654bd77c9bb60"
            ],
            [
            "name"=> "Alma Gloria Nieto Flores",
            "tagID"=> "654bd77c9ca82"
            ],
            [
            "name"=> "Ignacio Mancilla Morales",
            "tagID"=> "654bd77c9d908"
            ],
            [
            "name"=> "Martha Paola Sánchez Soto",
            "tagID"=> "654bd77c9e7a0"
            ],
            [
            "name"=> "Lucia Georgina Alcantara Parra",
            "tagID"=> "654bd77c9f5ec"
            ],
            [
            "name"=> "Claudio Arturo Valencia Reyes",
            "tagID"=> "654bd77ca03cb"
            ],
            [
            "name"=> "Edgar López Díaz",
            "tagID"=> "654bd77ca11e6"
            ],
            [
            "name"=> "Yolanda Del Carmen Pérez Martínez",
            "tagID"=> "654bd77ca228f"
            ],
            [
            "name"=> "Marcela Bernadett Gastelum Aguilar",
            "tagID"=> "654bd77ca3258"
            ],
            [
            "name"=> "Jose Alfonso Laguna Contreras",
            "tagID"=> "654bd77ca40d6"
            ],
            [
            "name"=> "Claudia Elba Torres Malacara",
            "tagID"=> "654bd77ca50a2"
            ],
            [
            "name"=> "Gustavo Rodriguez Alcantara",
            "tagID"=> "654bd77ca5ea3"
            ],
            [
            "name"=> "Erick Baltazar Palacios",
            "tagID"=> "654bd77ca6cd6"
            ],
            [
            "name"=> "Francisco Javier Garcia Vargas",
            "tagID"=> "654bd77ca7b56"
            ],
            [
            "name"=> "Israel Villanueva Fernández",
            "tagID"=> "654bd77ca89ab"
            ],
            [
            "name"=> "Alberto Orozco Saucedo",
            "tagID"=> "654bd77ca980c"
            ],
            [
            "name"=> "Antonio Vázquez Garduño",
            "tagID"=> "654bd77caa842"
            ],
            [
            "name"=> "Adriana Apodaca Dueñas",
            "tagID"=> "654bd77cab84b"
            ],
            [
            "name"=> "Alejandro Berenguel Álvarez",
            "tagID"=> "654bd77cac930"
            ],
            [
            "name"=> "Abraham Huitxilihuitl Jauregui Luna",
            "tagID"=> "654bd77cad908"
            ],
            [
            "name"=> "Jacqueline Alejandra Gonzalez Landgrave",
            "tagID"=> "654bd77cae7de"
            ],
            [
            "name"=> "Jonathan Morales Sanchez",
            "tagID"=> "654bd77cafc17"
            ],
            [
            "name"=> "Antonio Elías Abraham Jalil",
            "tagID"=> "654bd77cb1409"
            ],
            [
            "name"=> "Aaron Arturo Robles Ramirez",
            "tagID"=> "654bd77cb2bf6"
            ],
            [
            "name"=> "Abigail Coutiño García",
            "tagID"=> "654bd77cb450c"
            ],
            [
            "name"=> "Norma Ramírez León",
            "tagID"=> "654bd77cb5d35"
            ],
            [
            "name"=> "Nancy Tatengo Rodríguez",
            "tagID"=> "654bd77cb7545"
            ],
            [
            "name"=> "David Zárate Meléndez",
            "tagID"=> "654bd77cb8d6e"
            ],
            [
            "name"=> "Yazbeck Velazco Mendez",
            "tagID"=> "654bd77cba5ed"
            ],
            [
            "name"=> "Alfonso Copto García",
            "tagID"=> "654bd77cbbe81"
            ],
            [
            "name"=> "Alejandro Eduardo Alemán Valdés",
            "tagID"=> "654bd77cbd764"
            ],
            [
            "name"=> "Rogelio Guillen Torres",
            "tagID"=> "654bd77cbefdb"
            ],
            [
            "name"=> "Héctor Gutiérrez Zuñiga",
            "tagID"=> "654bd77cc0854"
            ],
            [
            "name"=> "Enrique Cobos Aguirre",
            "tagID"=> "654bd77cc208c"
            ],
            [
            "name"=> "Alejandro Bautista Maldonado",
            "tagID"=> "654bd77cc38a3"
            ],
            [
            "name"=> "Arturo Fraustro Pérez",
            "tagID"=> "654bd77cc50e1"
            ],
            [
            "name"=> "Alfredo Aguilera López",
            "tagID"=> "654bd77cc696e"
            ],
            [
            "name"=> "Gabriela Anastacia Colonia Albornoz",
            "tagID"=> "654bd77cc816d"
            ],
            [
            "name"=> "Eduardo Pallares Coello",
            "tagID"=> "654bd77cc99e4"
            ],
            [
            "name"=> "Marco Antonio Cardiel Pérez",
            "tagID"=> "654bd77ccb23d"
            ],
            [
            "name"=> "Miguel Ángel Carreón Espejel",
            "tagID"=> "654bd77ccc924"
            ],
            [
            "name"=> "Eduardo Alberto Naveda Alva",
            "tagID"=> "654bd77ccd954"
            ],
            [
            "name"=> "Martha Patricia Gutiérrez Vilchis",
            "tagID"=> "654bd77cce78f"
            ],
            [
            "name"=> "Luis Benito Sánchez Saavedra",
            "tagID"=> "654bd77cd0913"
            ],
            [
            "name"=> "Mario Leonardo García Oliva",
            "tagID"=> "654bd77cd2421"
            ],
            [
            "name"=> "Gregory Torres Palomino",
            "tagID"=> "654bd77cd3575"
            ],
            [
            "name"=> "Aldo Eugenio Pestarino Meza",
            "tagID"=> "654bd77cd4aff"
            ],
            [
            "name"=> "Alejandro Jiménez Velázquez",
            "tagID"=> "654bd77cd5b1e"
            ],
            [
            "name"=> "Alejandra Jiménez Guirola",
            "tagID"=> "654bd77cd6b59"
            ],
            [
            "name"=> "José Alejandro Hidalgo García",
            "tagID"=> "654bd77cd7c46"
            ],
            [
            "name"=> "Alicia Pérez Serafín",
            "tagID"=> "654bd77cd8d41"
            ],
            [
            "name"=> "Alfonso Eduardo Faure Vilchis",
            "tagID"=> "654bd77cd9db7"
            ],
            [
            "name"=> "Alejandro Rodriguez Rodriguez",
            "tagID"=> "654bd77cdaee5"
            ],
            [
            "name"=> "America Alanis Blancas",
            "tagID"=> "654bd77cdbf62"
            ],
            [
            "name"=> "Álvaro León Miranda",
            "tagID"=> "654bd77cdd1b4"
            ],
            [
            "name"=> "Alma Yolanda García Betancourt",
            "tagID"=> "654bd77cde363"
            ],
            [
            "name"=> "Karla Sanchez Diaz",
            "tagID"=> "654bd77cdf48b"
            ],
            [
            "name"=> "Esperanza Herminia García Ortíz",
            "tagID"=> "654bd77ce02df"
            ],
            [
            "name"=> "Luis Alpizar Soto",
            "tagID"=> "654bd77ce118a"
            ],
            [
            "name"=> "José Emilio Juventino Cuautle Flores",
            "tagID"=> "654bd77ce200d"
            ],
            [
            "name"=> "Jose David Michelle Perez Uribe",
            "tagID"=> "654bd77ce47e5"
            ],
            [
            "name"=> "Maria de los Ángeles Martínez López",
            "tagID"=> "654bd77ce58b2"
            ],
            [
            "name"=> "Francisco Gómez Medina",
            "tagID"=> "654bd77ce6d54"
            ],
            [
            "name"=> "Ana Débora Azuela Aldana",
            "tagID"=> "654bd77ce7d43"
            ],
            [
            "name"=> "Ángel Ballesteros Trujillo",
            "tagID"=> "654bd77ce8f13"
            ],
            [
            "name"=> "Fernando Augusto Ayala Urriola",
            "tagID"=> "654bd77cea46b"
            ],
            [
            "name"=> "Norma Angélica Pedraza Pacheco",
            "tagID"=> "654bd77cec061"
            ],
            [
            "name"=> "Salvador Vaca Hernández",
            "tagID"=> "654bd77ced6c2"
            ],
            [
            "name"=> "José Gabriel Anguiano Delgado",
            "tagID"=> "654bd77ceeb0c"
            ],
            [
            "name"=> "Carlos Enrique Angulo Benítez",
            "tagID"=> "654bd77ceff0a"
            ],
            [
            "name"=> "Viridiana Pantaleon Colin",
            "tagID"=> "654bd77cf10ac"
            ],
            [
            "name"=> "Jesús Manuel Ceceña Rodríguez",
            "tagID"=> "654bd77cf2926"
            ],
            [
            "name"=> "Ivan Antonio Rivas Rivera",
            "tagID"=> "654bd77cf3a56"
            ],
            [
            "name"=> "Carlos Eduardo Hoyos Apodaca",
            "tagID"=> "654bd77d00801"
            ],
            [
            "name"=> "Alejandro Reyes Spíndola Ramírez",
            "tagID"=> "654bd77d016d0"
            ],
            [
            "name"=> "Aureliano Zavála Mendoza",
            "tagID"=> "654bd77d02608"
            ],
            [
            "name"=> "Karla Fabiola Solís Solís",
            "tagID"=> "654bd77d03503"
            ],
            [
            "name"=> "Ines Alvarez De Iturbe",
            "tagID"=> "654bd77d04387"
            ],
            [
            "name"=> "Jorge Miguel Karam Jiménez",
            "tagID"=> "654bd77d0533b"
            ],
            [
            "name"=> "Alejandra Sanchez Cruz",
            "tagID"=> "654bd77d0638a"
            ],
            [
            "name"=> "Luis Miguel Cepeda Gutiérrez",
            "tagID"=> "654bd77d0726f"
            ],
            [
            "name"=> "Jesus Humberto Oyarzabal Camacho",
            "tagID"=> "654bd77d08169"
            ],
            [
            "name"=> "Marisela Cuéllar Montalvo",
            "tagID"=> "654bd77d09443"
            ],
            [
            "name"=> "Ana Elena Limón Rojas",
            "tagID"=> "654bd77d0a4da"
            ],
            [
            "name"=> "Francisco Azahel Cortes Hernandez",
            "tagID"=> "654bd77d0b465"
            ],
            [
            "name"=> "Bernardo Jardón Ugalde",
            "tagID"=> "654bd77d0c3b0"
            ],
            [
            "name"=> "Belem Berenice Cruz Santiago",
            "tagID"=> "654bd77d0d20f"
            ],
            [
            "name"=> "Salvador Alfonso Calvillo Robles",
            "tagID"=> "654bd77d0e26b"
            ],
            [
            "name"=> "Lizeth Eugenia Carrizales Rodriguez",
            "tagID"=> "654bd77d0f09c"
            ],
            [
            "name"=> "Jesica Karen Martínez Saucedo",
            "tagID"=> "654bd77d0ff04"
            ],
            [
            "name"=> "César Antonio Noyola Salazar",
            "tagID"=> "654bd77d10f12"
            ],
            [
            "name"=> "Blanca Lidya Torres Medina",
            "tagID"=> "654bd77d11dbd"
            ],
            [
            "name"=> "Beatriz Zuñiga Manriquez",
            "tagID"=> "654bd77d12c99"
            ],
            [
            "name"=> "Brenda Bibiana Tenorio Rodríguez",
            "tagID"=> "654bd77d13b36"
            ],
            [
            "name"=> "Sandra Lorena Bobadilla García",
            "tagID"=> "654bd77d14afb"
            ],
            [
            "name"=> "Irene Brambila De la Cruz",
            "tagID"=> "654bd77d15917"
            ],
            [
            "name"=> "Marcela Mendoza Hernandez",
            "tagID"=> "654bd77d16803"
            ],
            [
            "name"=> "Daniel Martínez Sánchez",
            "tagID"=> "654bd77d177a2"
            ],
            [
            "name"=> "Rafael Medrano Ocadiz",
            "tagID"=> "654bd77d18697"
            ],
            [
            "name"=> "Fernando Ríos Gutiérrez",
            "tagID"=> "654bd77d19562"
            ],
            [
            "name"=> "Braulio Isaac Palma Saldivar",
            "tagID"=> "654bd77d1a417"
            ],
            [
            "name"=> "Julio César Del Valle González",
            "tagID"=> "654bd77d1b2f5"
            ],
            [
            "name"=> "Alejandro García Jiménez",
            "tagID"=> "654bd77d1c599"
            ],
            [
            "name"=> "Maria Guadalupe Esqueda Martínez",
            "tagID"=> "654bd77d1da27"
            ],
            [
            "name"=> "Roberto Hernández Merino",
            "tagID"=> "654bd77d1eb72"
            ],
            [
            "name"=> "Alejandra Quiroga Valdés",
            "tagID"=> "654bd77d1fc99"
            ],
            [
            "name"=> "Joanna Alejandra Cardoso Biard",
            "tagID"=> "654bd77d20cd7"
            ],
            [
            "name"=> "José Guadalupe Cabrera Cabrera",
            "tagID"=> "654bd77d220ac"
            ],
            [
            "name"=> "Ricardo Hugo Simroth Núñez",
            "tagID"=> "654bd77d230f8"
            ],
            [
            "name"=> "Ana Teresa Chávez Ramírez",
            "tagID"=> "654bd77d2412f"
            ],
            [
            "name"=> "Ramiro Alonso Aliaga",
            "tagID"=> "654bd77d25096"
            ],
            [
            "name"=> "Carlos Adon Gutiérrez Del Moral",
            "tagID"=> "654bd77d262ab"
            ],
            [
            "name"=> "Carlos Espinoza Guerrero",
            "tagID"=> "654bd77d273e4"
            ],
            [
            "name"=> "Carmen Brambila Basurto",
            "tagID"=> "654bd77d2837b"
            ],
            [
            "name"=> "Carolina Méndez Zárate",
            "tagID"=> "654bd77d29bd6"
            ],
            [
            "name"=> "Enrique Prieto Hernández",
            "tagID"=> "654bd77d2b8f3"
            ],
            [
            "name"=> "Roberto Castro Montoya",
            "tagID"=> "654bd77d2d5ad"
            ],
            [
            "name"=> "José Manuel Unda Ugalde",
            "tagID"=> "654bd77d2f432"
            ],
            [
            "name"=> "Daniel Eliseo Arzamendi Gutierrez",
            "tagID"=> "654bd77d30ec2"
            ],
            [
            "name"=> "Eduardo Flores Martin",
            "tagID"=> "654bd77d32c64"
            ],
            [
            "name"=> "Maria Guadalupe Bautista Victoria",
            "tagID"=> "654bd77d3480b"
            ],
            [
            "name"=> "José Miro Montaño",
            "tagID"=> "654bd77d367c3"
            ],
            [
            "name"=> "Arnoldo Rafael Sierra Encinas",
            "tagID"=> "654bd77d38126"
            ],
            [
            "name"=> "Juan Ortiz Ocegueda",
            "tagID"=> "654bd77d395ee"
            ],
            [
            "name"=> "Alberto Hernández Valle",
            "tagID"=> "654bd77d3acf8"
            ],
            [
            "name"=> "Raúl Bastida Medina",
            "tagID"=> "654bd77d3c0fa"
            ],
            [
            "name"=> "Ildefonso Ugalde Olvera",
            "tagID"=> "654bd77d3d476"
            ],
            [
            "name"=> "Ramsés Carlos Dorantes Piña",
            "tagID"=> "654bd77d3ef5a"
            ],
            [
            "name"=> "Donaji Miranda González",
            "tagID"=> "654bd77d4047a"
            ],
            [
            "name"=> "Dora Alicia Ramos Arce",
            "tagID"=> "654bd77d42029"
            ],
            [
            "name"=> "Dora Alicia Galindo Cavazos",
            "tagID"=> "654bd77d43677"
            ],
            [
            "name"=> "Eduardo Vargas Betancourt",
            "tagID"=> "654bd77d44952"
            ],
            [
            "name"=> "Edwing Reynaldo Ortiz Bernal",
            "tagID"=> "654bd77d460c1"
            ],
            [
            "name"=> "Fernando Rodríguez Sixtos",
            "tagID"=> "654bd77d4773d"
            ],
            [
            "name"=> "Ignacio Negrete Navarrete",
            "tagID"=> "654bd77d48ccf"
            ],
            [
            "name"=> "Víctor Manuel Mercado Ortiz",
            "tagID"=> "654bd77d4a3ee"
            ],
            [
            "name"=> "Celerina Ortíz Ramos",
            "tagID"=> "654bd77d4ba60"
            ],
            [
            "name"=> "María del Rosario Ramírez López",
            "tagID"=> "654bd77d4cf91"
            ],
            [
            "name"=> "Cid Rafael Bravo Cortez",
            "tagID"=> "654bd77d4eb4d"
            ],
            [
            "name"=> "Cinthya Bustamante Gallardo",
            "tagID"=> "654bd77d50104"
            ],
            [
            "name"=> "José Martín Lopez Amezquita",
            "tagID"=> "654bd77d515b1"
            ],
            [
            "name"=> "Javier Saldaña Venegas",
            "tagID"=> "654bd77d52cd6"
            ],
            [
            "name"=> "Francisco González Valadez",
            "tagID"=> "654bd77d541bd"
            ],
            [
            "name"=> "Elmer Jesús Muñoz González",
            "tagID"=> "654bd77d553d4"
            ],
            [
            "name"=> "Maria Dolores Gutiérrez Serrano",
            "tagID"=> "654bd77d565ef"
            ],
            [
            "name"=> "María Guadalupe Clara Vallejo Macías",
            "tagID"=> "654bd77d576fb"
            ],
            [
            "name"=> "Luis Guillermo Meave Cueva",
            "tagID"=> "654bd77d5866a"
            ],
            [
            "name"=> "Juan Martín Patlán Rodríguez",
            "tagID"=> "654bd77d595d7"
            ],
            [
            "name"=> "Rubén Camacho Rivera",
            "tagID"=> "654bd77d5a6d5"
            ],
            [
            "name"=> "Norma Elizabeth Castillo Macedo",
            "tagID"=> "654bd77d5b7f7"
            ],
            [
            "name"=> "Fidel Shimasaki Nomura",
            "tagID"=> "654bd77d5c813"
            ],
            [
            "name"=> "Rocco José González Morán",
            "tagID"=> "654bd77d5d794"
            ],
            [
            "name"=> "Rodolfo Tinoco Diaz",
            "tagID"=> "654bd77d5e8a3"
            ],
            [
            "name"=> "Mirna Edith Ramírez Menéses",
            "tagID"=> "654bd77d601e3"
            ],
            [
            "name"=> "Jorge Luis Guerrero Martínez",
            "tagID"=> "654bd77d6110d"
            ],
            [
            "name"=> "Eliseo Isaías Marín Salvatti",
            "tagID"=> "654bd77d61f55"
            ],
            [
            "name"=> "José de Jesús Alcalá López",
            "tagID"=> "654bd77d630a7"
            ],
            [
            "name"=> "María Esther Martínez Mercado",
            "tagID"=> "654bd77d63dc7"
            ],
            [
            "name"=> "Jorge Andrés González Nieto",
            "tagID"=> "654bd77d64c70"
            ],
            [
            "name"=> "Gladis Tejada Martínez",
            "tagID"=> "654bd77d65a8a"
            ],
            [
            "name"=> "Maricela Guerrero González",
            "tagID"=> "654bd77d66a0c"
            ],
            [
            "name"=> "Emilio Enrique Gutiérrez Mendoza",
            "tagID"=> "654bd77d678dd"
            ],
            [
            "name"=> "Jose Luis Zacarias Macias",
            "tagID"=> "654bd77d68745"
            ],
            [
            "name"=> "Anaith Guadalupe Valerio Limon",
            "tagID"=> "654bd77d695b1"
            ],
            [
            "name"=> "José Luis Flores Estebanez",
            "tagID"=> "654bd77d6a684"
            ],
            [
            "name"=> "Ana Maria Sanchez Ruelas",
            "tagID"=> "654bd77d6b914"
            ],
            [
            "name"=> "José de Jesús Ríos Alba",
            "tagID"=> "654bd77d6c6fb"
            ],
            [
            "name"=> "Alondra Sanchez Ruelas",
            "tagID"=> "654bd77d6d611"
            ],
            [
            "name"=> "Agustin Francisco Cabrera Hermosillo",
            "tagID"=> "654bd77d6e5c5"
            ],
            [
            "name"=> "María del Carmen Paredes Martínez",
            "tagID"=> "654bd77d6f6a2"
            ],
            [
            "name"=> "José Luis García Chávez",
            "tagID"=> "654bd77d70433"
            ],
            [
            "name"=> "Carlos Humberto Gómez Guzmán",
            "tagID"=> "654bd77d710f3"
            ],
            [
            "name"=> "José Luis Juárez Torres",
            "tagID"=> "654bd77d71fcf"
            ],
            [
            "name"=> "Jorge Rafael Ramírez Casillas",
            "tagID"=> "654bd77d7352a"
            ],
            [
            "name"=> "Ernesto Ibarra Plascencia",
            "tagID"=> "654bd77d74950"
            ],
            [
            "name"=> "Luis Alonso Solórzano Escandón",
            "tagID"=> "654bd77d75a06"
            ],
            [
            "name"=> "José Antonio López Lara",
            "tagID"=> "654bd77d76bba"
            ],
            [
            "name"=> "Francisco Javier Orenday Martínez",
            "tagID"=> "654bd77d77ca9"
            ],
            [
            "name"=> "Miguel Angel Mata Flores",
            "tagID"=> "654bd77d78bb3"
            ],
            [
            "name"=> "Francisco Ricardo Pérez Diez",
            "tagID"=> "654bd77d79966"
            ],
            [
            "name"=> "Rogelio Ramos Velarde",
            "tagID"=> "654bd77d7a70e"
            ],
            [
            "name"=> "Ramiro Villanueva López",
            "tagID"=> "654bd77d7b91e"
            ],
            [
            "name"=> "Marco Antonio Carvajal Lopez",
            "tagID"=> "654bd77d7c8a7"
            ],
            [
            "name"=> "Josué Isaac Estrada Almanza",
            "tagID"=> "654bd77d7d757"
            ],
            [
            "name"=> "Cinthya Monserrat Sandoval Gonzalez",
            "tagID"=> "654bd77d7e5e2"
            ],
            [
            "name"=> "Rene Rodrigo Lemus Samano",
            "tagID"=> "654bd77d7f7fb"
            ],
            [
            "name"=> "Mario Santiago Antonio",
            "tagID"=> "654bd77d8076a"
            ],
            [
            "name"=> "Sion Agami Micha",
            "tagID"=> "654bd77d81d2e"
            ],
            [
            "name"=> "Januario Estrella Jiménez",
            "tagID"=> "654bd77d83509"
            ],
            [
            "name"=> "Jaime Rodríguez Maldonado",
            "tagID"=> "654bd77d84d82"
            ],
            [
            "name"=> "Evelyn Zoraida Cuandón Escobar",
            "tagID"=> "654bd77d864e3"
            ],
            [
            "name"=> "Juan Angel De Leon Garza",
            "tagID"=> "654bd77d87e07"
            ],
            [
            "name"=> "Delia Noemi Esquivel Callejas",
            "tagID"=> "654bd77d89018"
            ],
            [
            "name"=> "Juan Pablo Diaz Davalos",
            "tagID"=> "654bd77d89ee6"
            ],
            [
            "name"=> "Raymundo Lechuga Gutiérrez",
            "tagID"=> "654bd77d8aecc"
            ],
            [
            "name"=> "Arturo Perea Martínez",
            "tagID"=> "654bd77d8bff0"
            ],
            [
            "name"=> "María Isabel Díaz López",
            "tagID"=> "654bd77d8d0d5"
            ],
            [
            "name"=> "Lucía Jaimes Hernández",
            "tagID"=> "654bd77d8e068"
            ],
            [
            "name"=> "Jazmín Juárez Cabrera",
            "tagID"=> "654bd77d8ef2c"
            ],
            [
            "name"=> "Jorge Aguirre Espinosa",
            "tagID"=> "654bd77d9010c"
            ],
            [
            "name"=> "Dagoberto Alvarado Romero",
            "tagID"=> "654bd77d91222"
            ],
            [
            "name"=> "Virginia Irela Hernández Luna",
            "tagID"=> "654bd77d922ac"
            ],
            [
            "name"=> "Érika Elizabeth Sánchez Schmitz",
            "tagID"=> "654bd77d935e6"
            ],
            [
            "name"=> "Felipe Rey Rasgado Pineda",
            "tagID"=> "654bd77d94693"
            ],
            [
            "name"=> "Adán Ramírez Ocón",
            "tagID"=> "654bd77d9563d"
            ],
            [
            "name"=> "Jose Emilio Benitez Sosa",
            "tagID"=> "654bd77d964d9"
            ],
            [
            "name"=> "Jorge Ivan Chaparro Vazquez",
            "tagID"=> "654bd77d979a4"
            ],
            [
            "name"=> "Nydia Arguelles Covarrubias",
            "tagID"=> "654bd77d98e50"
            ],
            [
            "name"=> "María Angélica Ramos Álvarez",
            "tagID"=> "654bd77d99c42"
            ],
            [
            "name"=> "Irma Patiño Gutiérrez",
            "tagID"=> "654bd77d9a986"
            ],
            [
            "name"=> "Mónica Imelda Romo Peréz",
            "tagID"=> "654bd77d9b9f3"
            ],
            [
            "name"=> "Blanca Xóchitl Salinas Reyes",
            "tagID"=> "654bd77d9c86b"
            ],
            [
            "name"=> "Angélica María Aguilar Ceniceros",
            "tagID"=> "654bd77d9d5dc"
            ],
            [
            "name"=> "Verónica Caamal Jiménez",
            "tagID"=> "654bd77d9e37d"
            ],
            [
            "name"=> "María del Carmen Trinidad Pérez",
            "tagID"=> "654bd77d9f179"
            ],
            [
            "name"=> "Claudia Olivares Nolasco",
            "tagID"=> "654bd77da0318"
            ],
            [
            "name"=> "Daniela Fernandez Pellon Fernandez",
            "tagID"=> "654bd77da12ac"
            ],
            [
            "name"=> "Maria De Lourdes De Horta Martinez",
            "tagID"=> "654bd77da20d8"
            ],
            [
            "name"=> "Elizabeth López Gachuz",
            "tagID"=> "654bd77da30fb"
            ],
            [
            "name"=> "Gabriela Juarez Dominguez",
            "tagID"=> "654bd77da448e"
            ],
            [
            "name"=> "Adán Medrano Rojas",
            "tagID"=> "654bd77da53fa"
            ],
            [
            "name"=> "Mirna Hernández Olguín",
            "tagID"=> "654bd77da6358"
            ],
            [
            "name"=> "Agueda Aguilar Pizaña",
            "tagID"=> "654bd77da7232"
            ],
            [
            "name"=> "Maria Juana León Reyes",
            "tagID"=> "654bd77da82b0"
            ],
            [
            "name"=> "Martín Ramírez Soto",
            "tagID"=> "654bd77da9035"
            ],
            [
            "name"=> "Alejandro Pineda Flores",
            "tagID"=> "654bd77da9d66"
            ],
            [
            "name"=> "Francisco Arturo Padilla Ramírez",
            "tagID"=> "654bd77daab48"
            ],
            [
            "name"=> "Raúl Puente Peña",
            "tagID"=> "654bd77dabbc5"
            ],
            [
            "name"=> "José Buenaventura Rojas Rebollo",
            "tagID"=> "654bd77dacad4"
            ],
            [
            "name"=> "Raúl Héctor Roque Sánchez",
            "tagID"=> "654bd77dae067"
            ],
            [
            "name"=> "Rita Rodríguez Duarte",
            "tagID"=> "654bd77daef3d"
            ],
            [
            "name"=> "Rosa Elena Andrade Baeza",
            "tagID"=> "654bd77db00d8"
            ],
            [
            "name"=> "Rosa María Vázquez Cázares",
            "tagID"=> "654bd77db1043"
            ],
            [
            "name"=> "Arturo Salazar Acuña",
            "tagID"=> "654bd77db1f64"
            ],
            [
            "name"=> "Roberto Serrano Rentería",
            "tagID"=> "654bd77db2e2b"
            ],
            [
            "name"=> "Gloria Silvia Aguilar Sánchez",
            "tagID"=> "654bd77db3f4d"
            ],
            [
            "name"=> "Silvia Ávila Zambrano",
            "tagID"=> "654bd77db4e91"
            ],
            [
            "name"=> "Eduardo Suárez Del Real González",
            "tagID"=> "654bd77db5ccd"
            ],
            [
            "name"=> "Tomás Zepeda Muñóz",
            "tagID"=> "654bd77db6c3f"
            ],
            [
            "name"=> "Virginia Gaona Nava",
            "tagID"=> "654bd77db7cf7"
            ],
            [
            "name"=> "Dagoberto Terán Reyes",
            "tagID"=> "654bd77db8cbf"
            ],
            [
            "name"=> "Eduardo Alejandro Terreros Martínez",
            "tagID"=> "654bd77db9b3c"
            ],
            [
            "name"=> "Carlos Arturo Tirado Tirado",
            "tagID"=> "654bd77dbaa6d"
            ],
            [
            "name"=> "Sergio Francisco González Aguilar",
            "tagID"=> "654bd77dbba2e"
            ],
            [
            "name"=> "María De Jesús Vergara Yoisura",
            "tagID"=> "654bd77dbce2d"
            ],
            [
            "name"=> "José Susano Ugalde Balcazar",
            "tagID"=> "654bd77dbdc65"
            ],
            [
            "name"=> "Carlos Hugo Medina Noyola",
            "tagID"=> "654bd77dbec60"
            ],
            [
            "name"=> "Pablo Roberto Casaubón Garcín",
            "tagID"=> "654bd77dbfd40"
            ],
            [
            "name"=> "Victor Arturo Durán Corchado",
            "tagID"=> "654bd77dc0fe7"
            ],
            [
            "name"=> "Jorge Antonio Castro Pineda",
            "tagID"=> "654bd77dc1e84"
            ],
            [
            "name"=> "Edgar Humberto Imaña Castro",
            "tagID"=> "654bd77dc2ca7"
            ],
            [
            "name"=> "Eduardo Linares Juárez",
            "tagID"=> "654bd77dc3d60"
            ],
            [
            "name"=> "Efrén Rodríguez Lizárraga",
            "tagID"=> "654bd77dc4ea8"
            ],
            [
            "name"=> "Efren Zaragoza Archundia",
            "tagID"=> "654bd77dc5f02"
            ],
            [
            "name"=> "Eduardo Zamora Dávila",
            "tagID"=> "654bd77dc6dbf"
            ],
            [
            "name"=> "Elias Duck Hernandez",
            "tagID"=> "654bd77dc7d9f"
            ],
            [
            "name"=> "José Eleazar Suárez Zárate",
            "tagID"=> "654bd77dc90c5"
            ],
            [
            "name"=> "Francisco Elmer Fontes Lohr",
            "tagID"=> "654bd77dca09a"
            ],
            [
            "name"=> "Rolando Montes de Oca Navarro",
            "tagID"=> "654bd77dcb02c"
            ],
            [
            "name"=> "Elva Margarita Campos Figueroa",
            "tagID"=> "654bd77dcbed5"
            ],
            [
            "name"=> "Juana Elvia Castillo Calderón",
            "tagID"=> "654bd77dcce1c"
            ],
            [
            "name"=> "Ángel Montes de Oca Franco",
            "tagID"=> "654bd77dcdcaf"
            ],
            [
            "name"=> "Jorge Octavio Olvera Sanchez",
            "tagID"=> "654bd77dcec57"
            ],
            [
            "name"=> "Enrique Israel Amaya Juárez",
            "tagID"=> "654bd77dcfa8b"
            ],
            [
            "name"=> "José Carlos Escandón Ojeda",
            "tagID"=> "654bd77dd08e4"
            ],
            [
            "name"=> "Francisco Javier Enríquez Rascón",
            "tagID"=> "654bd77dd1a58"
            ],
            [
            "name"=> "Eugenio Chávez Ramírez",
            "tagID"=> "654bd77dd3441"
            ],
            [
            "name"=> "José Francisco Luna Sánchez",
            "tagID"=> "654bd77dd6feb"
            ],
            [
            "name"=> "Genaro Olvera López",
            "tagID"=> "654bd77dd9245"
            ],
            [
            "name"=> "Jaime Vicente Jara Pérez",
            "tagID"=> "654bd77ddb040"
            ],
            [
            "name"=> "Javier González Flores",
            "tagID"=> "654bd77ddcd24"
            ],
            [
            "name"=> "Hugo Valverde Franco",
            "tagID"=> "654bd77dde97f"
            ],
            [
            "name"=> "J Jesús Enrique Torres Saldívar",
            "tagID"=> "654bd77de04a7"
            ],
            [
            "name"=> "Juan Manuel Carbajal Macedo",
            "tagID"=> "654bd77de1f83"
            ],
            [
            "name"=> "Jorge Alberto Perez Figueroa",
            "tagID"=> "654bd77de3b7d"
            ],
            [
            "name"=> "Esperanza Cuevas Legorreta",
            "tagID"=> "654bd77de578c"
            ],
            [
            "name"=> "Jorge Alberto Jiménez Lozano",
            "tagID"=> "654bd77de72c8"
            ],
            [
            "name"=> "Víctor Jorge Flores Fonseca",
            "tagID"=> "654bd77dea2f9"
            ],
            [
            "name"=> "José Luis Cuadras Jiménez",
            "tagID"=> "654bd77debb3c"
            ],
            [
            "name"=> "José Antonio Ríos Pérez",
            "tagID"=> "654bd77ded0a2"
            ],
            [
            "name"=> "José Luis González Esparza",
            "tagID"=> "654bd77dee62b"
            ],
            [
            "name"=> "Gerardo Lara Aguilar",
            "tagID"=> "654bd77df02c6"
            ],
            [
            "name"=> "Juan de Dios Varela Tenorio",
            "tagID"=> "654bd77df1f90"
            ],
            [
            "name"=> "Eugenio Salgado Ruíz",
            "tagID"=> "654bd77df36ab"
            ],
            [
            "name"=> "Erick Ramirez Ramirez",
            "tagID"=> "654bd77e00b51"
            ],
            [
            "name"=> "Juan Francisco Álvarez Ibarra",
            "tagID"=> "654bd77e020d2"
            ],
            [
            "name"=> "Luciano Mendoza Soto",
            "tagID"=> "654bd77e032eb"
            ],
            [
            "name"=> "Manuel Antonio Song Trujíllo",
            "tagID"=> "654bd77e04329"
            ],
            [
            "name"=> "Luis Axel Estrada Guzman",
            "tagID"=> "654bd77e0537d"
            ],
            [
            "name"=> "Marco Antonio Juárez Aguilera",
            "tagID"=> "654bd77e062d3"
            ],
            [
            "name"=> "Mariano Rivera Echegoyen",
            "tagID"=> "654bd77e0719f"
            ],
            [
            "name"=> "Miguel Ángel Alcázar Nieto",
            "tagID"=> "654bd77e07f85"
            ],
            [
            "name"=> "Felipe de Jesús Oliveros Lozano",
            "tagID"=> "654bd77e08c9d"
            ],
            [
            "name"=> "Fernando Jiménez Millán",
            "tagID"=> "654bd77e09a55"
            ],
            [
            "name"=> "Ricardo Urbina Arzate",
            "tagID"=> "654bd77e0a77a"
            ],
            [
            "name"=> "Francisco Javier Colín Navarro",
            "tagID"=> "654bd77e0b4a4"
            ],
            [
            "name"=> "Fernando Pérez Porrúa",
            "tagID"=> "654bd77e0c391"
            ],
            [
            "name"=> "Francisco Javier Díaz",
            "tagID"=> "654bd77e0d3aa"
            ],
            [
            "name"=> "Luz Gabriela Varela Tenorio",
            "tagID"=> "654bd77e0e4c6"
            ],
            [
            "name"=> "Rigoberto García Rivera",
            "tagID"=> "654bd77e0f3a1"
            ],
            [
            "name"=> "Germán Navarro Vidaurri",
            "tagID"=> "654bd77e102d3"
            ],
            [
            "name"=> "Jesús Gerardo González Adáme",
            "tagID"=> "654bd77e1128a"
            ],
            [
            "name"=> "David González Flores",
            "tagID"=> "654bd77e121fa"
            ],
            [
            "name"=> "Jorge Luis Girón Carrillo",
            "tagID"=> "654bd77e13308"
            ],
            [
            "name"=> "Gregorio Zenteno Macías",
            "tagID"=> "654bd77e1434b"
            ],
            [
            "name"=> "Graciela Caballero Campos",
            "tagID"=> "654bd77e1528d"
            ],
            [
            "name"=> "Adriana Guarneros Torres",
            "tagID"=> "654bd77e16318"
            ],
            [
            "name"=> "Gustavo Alonso Bustamante Monares",
            "tagID"=> "654bd77e17284"
            ],
            [
            "name"=> "José Antonio Uribe Moctezuma",
            "tagID"=> "654bd77e181c3"
            ],
            [
            "name"=> "Edgar Jaziel Barroso Bermúdez",
            "tagID"=> "654bd77e19223"
            ],
            [
            "name"=> "Juan Javier González López",
            "tagID"=> "654bd77e1a182"
            ],
            [
            "name"=> "Jacinto Jorge Martínez Ángeles",
            "tagID"=> "654bd77e1b13c"
            ],
            [
            "name"=> "José De Jesús Hernández Hernández",
            "tagID"=> "654bd77e1c211"
            ],
            [
            "name"=> "José Guzmán Barcenas",
            "tagID"=> "654bd77e1d3e0"
            ],
            [
            "name"=> "Gerardo Villarreal López Guerra",
            "tagID"=> "654bd77e1e512"
            ],
            [
            "name"=> "Liliana Soto Garcia",
            "tagID"=> "654bd77e1f5bc"
            ],
            [
            "name"=> "Héctor Ramón Guerrero Ortega",
            "tagID"=> "654bd77e20577"
            ],
            [
            "name"=> "Sofia Magdalena Juarez Barcenas",
            "tagID"=> "654bd77e21554"
            ],
            [
            "name"=> "Heriberto Vargas Bravo",
            "tagID"=> "654bd77e224ee"
            ],
            [
            "name"=> "Rocío Hernández Villalobos",
            "tagID"=> "654bd77e2343a"
            ],
            [
            "name"=> "José De Jesús Sanchez Sanchez",
            "tagID"=> "654bd77e2431c"
            ],
            [
            "name"=> "José Luis Gerardo García Vela",
            "tagID"=> "654bd77e25325"
            ],
            [
            "name"=> "Jose Luis Gomez Lopez",
            "tagID"=> "654bd77e2631d"
            ],
            [
            "name"=> "José Manuel Adolfo Tovilla Mercado",
            "tagID"=> "654bd77e27252"
            ],
            [
            "name"=> "José Mauricio Acero Garzón",
            "tagID"=> "654bd77e2811e"
            ],
            [
            "name"=> "Juan Manuel Álvarez Marín",
            "tagID"=> "654bd77e2910c"
            ],
            [
            "name"=> "Jorge Eduardo Granados Rosario",
            "tagID"=> "654bd77e2a070"
            ],
            [
            "name"=> "Jorge Luis Hernández Arriaga",
            "tagID"=> "654bd77e2b029"
            ],
            [
            "name"=> "José Luis Atzin Fuentes",
            "tagID"=> "654bd77e2bf53"
            ],
            [
            "name"=> "José Natividad Rodríguez García",
            "tagID"=> "654bd77e2cf84"
            ],
            [
            "name"=> "Jose Pablo Ura Hernandez",
            "tagID"=> "654bd77e2e25c"
            ],
            [
            "name"=> "José Pérez Cervantes",
            "tagID"=> "654bd77e2f127"
            ],
            [
            "name"=> "José Luis Ramírez Haua",
            "tagID"=> "654bd77e2ff80"
            ],
            [
            "name"=> "Juan Ramón Torres Aguilar",
            "tagID"=> "654bd77e3106c"
            ],
            [
            "name"=> "Luis Enrique Rosado Richard",
            "tagID"=> "654bd77e31f1e"
            ],
            [
            "name"=> "Jerónimo Sánchez Medina",
            "tagID"=> "654bd77e331fd"
            ],
            [
            "name"=> "José Edilberto Suárez Nadal",
            "tagID"=> "654bd77e342f7"
            ],
            [
            "name"=> "José Antonio Rocha Rivera",
            "tagID"=> "654bd77e35338"
            ],
            [
            "name"=> "Juan Carlos García Crespo",
            "tagID"=> "654bd77e36223"
            ],
            [
            "name"=> "Kenia Iraís Enríquez Fernández",
            "tagID"=> "654bd77e37160"
            ],
            [
            "name"=> "Irma Brassetti González",
            "tagID"=> "654bd77e37fe3"
            ],
            [
            "name"=> "Irma Regalado Contreras",
            "tagID"=> "654bd77e39122"
            ],
            [
            "name"=> "Israel Torres Coria",
            "tagID"=> "654bd77e39faa"
            ],
            [
            "name"=> "Israel Castañon Torres",
            "tagID"=> "654bd77e3b2c7"
            ],
            [
            "name"=> "María Isabel Delgado Arellano",
            "tagID"=> "654bd77e3c146"
            ],
            [
            "name"=> "Itzzel López Alcantara",
            "tagID"=> "654bd77e3d0d1"
            ],
            [
            "name"=> "Álvaro Manuel Ruíz Mendoza",
            "tagID"=> "654bd77e3df95"
            ],
            [
            "name"=> "José Antonio Arizmendi Ramírez",
            "tagID"=> "654bd77e3ee64"
            ],
            [
            "name"=> "Adrian Nicolas Paredes Flores",
            "tagID"=> "654bd77e3fe01"
            ],
            [
            "name"=> "María Isabel Martínez Cruz",
            "tagID"=> "654bd77e40f66"
            ],
            [
            "name"=> "Juana Ramírez López",
            "tagID"=> "654bd77e41fcb"
            ],
            [
            "name"=> "Juan Manuel García Higuera",
            "tagID"=> "654bd77e4306f"
            ],
            [
            "name"=> "Juan Carlos Bautista Luna",
            "tagID"=> "654bd77e43f64"
            ],
            [
            "name"=> "Julio Filiberto Chirinos Fano",
            "tagID"=> "654bd77e44fba"
            ],
            [
            "name"=> "Rogelio Nolasco Jiménez",
            "tagID"=> "654bd77e45ee9"
            ],
            [
            "name"=> "Kenia Flores Montufar",
            "tagID"=> "654bd77e46de2"
            ],
            [
            "name"=> "Juan Francisco Hernández Sierra",
            "tagID"=> "654bd77e47bf4"
            ],
            [
            "name"=> "Luis Landeros García",
            "tagID"=> "654bd77e489ce"
            ],
            [
            "name"=> "Eulalia Rodríguez Cruz",
            "tagID"=> "654bd77e49881"
            ],
            [
            "name"=> "Jesús Luis Gerardo Cifuentes Romo",
            "tagID"=> "654bd77e4a6dd"
            ],
            [
            "name"=> "Leonel Martínez Corona Duarte",
            "tagID"=> "654bd77e4b40a"
            ],
            [
            "name"=> "Alfredo Medrano Mata",
            "tagID"=> "654bd77e4c297"
            ],
            [
            "name"=> "Leonidas Arteaga Botello",
            "tagID"=> "654bd77e4d103"
            ],
            [
            "name"=> "Norma Leticia López Tamanaja",
            "tagID"=> "654bd77e4dfce"
            ],
            [
            "name"=> "Margarita Sánchez Miranda",
            "tagID"=> "654bd77e4ed9a"
            ],
            [
            "name"=> "Cynthia Brenda Vega Juárez",
            "tagID"=> "654bd77e4fac2"
            ],
            [
            "name"=> "Verónica López Venegas",
            "tagID"=> "654bd77e508b0"
            ],
            [
            "name"=> "Mario Eduardo Navarro González",
            "tagID"=> "654bd77e5183e"
            ],
            [
            "name"=> "Daniel Flores Ramírez",
            "tagID"=> "654bd77e526c6"
            ],
            [
            "name"=> "Juan José Guillermo Uríbe Ordóñez",
            "tagID"=> "654bd77e53893"
            ],
            [
            "name"=> "Miguel Hernández Paniagua",
            "tagID"=> "654bd77e5468b"
            ],
            [
            "name"=> "Israel Cardenas Monteverde",
            "tagID"=> "654bd77e55956"
            ],
            [
            "name"=> "Lizandra Banderas Escobar",
            "tagID"=> "654bd77e56971"
            ],
            [
            "name"=> "Alberto Miguel Torres Toxqui",
            "tagID"=> "654bd77e57929"
            ],
            [
            "name"=> "Luis Monter Dipp",
            "tagID"=> "654bd77e58782"
            ],
            [
            "name"=> "Miguel Manuel Bernal Calzada",
            "tagID"=> "654bd77e59623"
            ],
            [
            "name"=> "Miguel Angel Serrano Mellado",
            "tagID"=> "654bd77e5a4ed"
            ],
            [
            "name"=> "María Lourdes Hernández Suárez",
            "tagID"=> "654bd77e5b4a6"
            ],
            [
            "name"=> "Miguel Enrique Blanco Del Toro",
            "tagID"=> "654bd77e5d4b1"
            ],
            [
            "name"=> "Carlos Enrique López Lizano",
            "tagID"=> "654bd77e5e364"
            ],
            [
            "name"=> "Jesus Manuel Lozano Garcia",
            "tagID"=> "654bd77e5f191"
            ],
            [
            "name"=> "Lucía Carreto Molina",
            "tagID"=> "654bd77e5ffc6"
            ],
            [
            "name"=> "Luis Mariano Ruíz Martínez",
            "tagID"=> "654bd77e60e8d"
            ],
            [
            "name"=> "Guadalupe Gómez Rodríguez",
            "tagID"=> "654bd77e61cab"
            ],
            [
            "name"=> "María Gabriela Montes Ortíz",
            "tagID"=> "654bd77e62ae5"
            ],
            [
            "name"=> "Maria Magdalena Garces Perez",
            "tagID"=> "654bd77e639aa"
            ],
            [
            "name"=> "Cynthia Dolores Pantaleon Colin",
            "tagID"=> "654bd77e64873"
            ],
            [
            "name"=> "Jesús Maldonado Rayas",
            "tagID"=> "654bd77e656a2"
            ],
            [
            "name"=> "Martha Alicia Lledias Corona",
            "tagID"=> "654bd77e664e3"
            ],
            [
            "name"=> "Luis Miguel Orozco Villalpando",
            "tagID"=> "654bd77e67346"
            ],
            [
            "name"=> "Rosa Carolina Castro González",
            "tagID"=> "654bd77e681ac"
            ],
            [
            "name"=> "Heriberto Solano Larranaga",
            "tagID"=> "654bd77e6907c"
            ],
            [
            "name"=> "Maria del Carmen Larios García",
            "tagID"=> "654bd77e69e90"
            ],
            [
            "name"=> "Luis Monroy Aviles",
            "tagID"=> "654bd77e6ab63"
            ],
            [
            "name"=> "Monica Guadalupe Gonzalez Guajardo",
            "tagID"=> "654bd77e6b9a1"
            ],
            [
            "name"=> "Carlos Javier Montoya Torres",
            "tagID"=> "654bd77e6c7e2"
            ],
            [
            "name"=> "Maria de Lourdes Ramírez Balderas",
            "tagID"=> "654bd77e6d64c"
            ],
            [
            "name"=> "Margarito Marin Romero",
            "tagID"=> "654bd77e6e4f9"
            ],
            [
            "name"=> "José Luis Mario García Nuñez",
            "tagID"=> "654bd77e6f4ed"
            ],
            [
            "name"=> "Mario González Reyes",
            "tagID"=> "654bd77e70455"
            ],
            [
            "name"=> "Marina Perez Diaz",
            "tagID"=> "654bd77e71418"
            ],
            [
            "name"=> "Mario Renteria Centeno",
            "tagID"=> "654bd77e7245e"
            ],
            [
            "name"=> "Marisol Sandoval Rodríguez",
            "tagID"=> "654bd77e7367f"
            ],
            [
            "name"=> "Daniel Filiberto Martin Tamayo",
            "tagID"=> "654bd77e7458f"
            ],
            [
            "name"=> "María Eugenia Sánchez O.Yudico",
            "tagID"=> "654bd77e75570"
            ],
            [
            "name"=> "Blanca Eugenia García Gámez",
            "tagID"=> "654bd77e765a3"
            ],
            [
            "name"=> "Maximiliano Antonio Gutiérrez Gutiérrez",
            "tagID"=> "654bd77e7753e"
            ],
            [
            "name"=> "Jonathan Alfredo Maya Epelstein",
            "tagID"=> "654bd77e78487"
            ],
            [
            "name"=> "Martín Ruedas Moreno",
            "tagID"=> "654bd77e793f3"
            ],
            [
            "name"=> "Nancy Denise Garcia Maldonado",
            "tagID"=> "654bd77e7a26f"
            ],
            [
            "name"=> "Claudia Esther Quiriarte Cisneros",
            "tagID"=> "654bd77e7b276"
            ],
            [
            "name"=> "Jorge Arturo Cardona Pérez",
            "tagID"=> "654bd77e7c581"
            ],
            [
            "name"=> "Elia Noemí Camacho Ojeda",
            "tagID"=> "654bd77e7d8d1"
            ],
            [
            "name"=> "Víctor Manuel Santiago Figueroa",
            "tagID"=> "654bd77e7e89c"
            ],
            [
            "name"=> "Luis Miguel Gomez Torres",
            "tagID"=> "654bd77e7f7c2"
            ],
            [
            "name"=> "Omar Bravo Calderón",
            "tagID"=> "654bd77e808d2"
            ],
            [
            "name"=> "Perla Leticia Ochoa Guajardo",
            "tagID"=> "654bd77e817dd"
            ],
            [
            "name"=> "Orlando Jose Rodriguez Lopez",
            "tagID"=> "654bd77e82757"
            ],
            [
            "name"=> "Ignacio Alejandro Nájera Gutiérrez",
            "tagID"=> "654bd77e838c3"
            ],
            [
            "name"=> "Beatriz Leonor Fernández Ruíz",
            "tagID"=> "654bd77e84a02"
            ],
            [
            "name"=> "Gabriel Velez Walldez",
            "tagID"=> "654bd77e85927"
            ],
            [
            "name"=> "Germán Ramírez Alcocer",
            "tagID"=> "654bd77e8683f"
            ],
            [
            "name"=> "Francisco Javier Morales Martínez",
            "tagID"=> "654bd77e876f2"
            ],
            [
            "name"=> "Adriana Mancilla Moreno",
            "tagID"=> "654bd77e8850a"
            ],
            [
            "name"=> "Carlos De la Vega Tejero",
            "tagID"=> "654bd77e893d2"
            ],
            [
            "name"=> "Juan Martín Bermúdez Rodríguez",
            "tagID"=> "654bd77e8a2c4"
            ],
            [
            "name"=> "Juan José Almaraz Navarro",
            "tagID"=> "654bd77e8b53e"
            ],
            [
            "name"=> "José Antonio García Martínez",
            "tagID"=> "654bd77e8c3e2"
            ],
            [
            "name"=> "Francisco Martín López Ostendi",
            "tagID"=> "654bd77e8d2b8"
            ],
            [
            "name"=> "Perla Yáñez Alvarado",
            "tagID"=> "654bd77e8e21c"
            ],
            [
            "name"=> "María Soledad Belmont Partida",
            "tagID"=> "654bd77e8f250"
            ],
            [
            "name"=> "Rosa Lidia Trujillo Castillo",
            "tagID"=> "654bd77e900c9"
            ],
            [
            "name"=> "Olga Lidia Romero Tejeda",
            "tagID"=> "654bd77e90fe0"
            ],
            [
            "name"=> "Rogelio Torres Guzman",
            "tagID"=> "654bd77e91eed"
            ],
            [
            "name"=> "Rubén Alfaro Tapia",
            "tagID"=> "654bd77e93048"
            ],
            [
            "name"=> "Brenda del Carmen Sabanero Contreras",
            "tagID"=> "654bd77e940c9"
            ],
            [
            "name"=> "Pedro Juan Cullen Benítez",
            "tagID"=> "654bd77e95106"
            ],
            [
            "name"=> "Apolinar Máximo Hernández Guerrero",
            "tagID"=> "654bd77e96214"
            ],
            [
            "name"=> "Leopoldo Antonio Talamantes Espinoza",
            "tagID"=> "654bd77e9743b"
            ],
            [
            "name"=> "José Capuano Rafael",
            "tagID"=> "654bd77e98558"
            ],
            [
            "name"=> "Luis Enrique Cervantes Carmona",
            "tagID"=> "654bd77e99923"
            ],
            [
            "name"=> "Raúl Bahena García",
            "tagID"=> "654bd77e9a9b4"
            ],
            [
            "name"=> "Lilia Ramírez Miranda",
            "tagID"=> "654bd77e9bb64"
            ],
            [
            "name"=> "Ramón García Zárate",
            "tagID"=> "654bd77e9cd3c"
            ],
            [
            "name"=> "Guillermina Sánchez Moreno",
            "tagID"=> "654bd77e9ddae"
            ],
            [
            "name"=> "Juan Luis Saucedo Medina",
            "tagID"=> "654bd77e9eea4"
            ],
            [
            "name"=> "Sergio de Jesús Dávila Cameras",
            "tagID"=> "654bd77ea0061"
            ],
            [
            "name"=> "Sergio Alejandro Lagunes Rodríguez",
            "tagID"=> "654bd77ea10e4"
            ],
            [
            "name"=> "Rubén Fermín Escobar Rodríguez",
            "tagID"=> "654bd77ea229c"
            ],
            [
            "name"=> "Sergio Velasques Sánchez",
            "tagID"=> "654bd77ea33b4"
            ],
            [
            "name"=> "José Nicolás Reynes Manzur",
            "tagID"=> "654bd77ea42ea"
            ],
            [
            "name"=> "Ricardo Tomas Reyes Retana Valdes",
            "tagID"=> "654bd77ea51c1"
            ],
            [
            "name"=> "Jorge Octavio Ramírez Del Valle",
            "tagID"=> "654bd77ea60eb"
            ],
            [
            "name"=> "Rodrígo Aguilar Padilla",
            "tagID"=> "654bd77ea6f45"
            ],
            [
            "name"=> "Julio César Meléndez Carranza",
            "tagID"=> "654bd77ea7dc4"
            ],
            [
            "name"=> "Óscar Solís Rodríguez",
            "tagID"=> "654bd77ea8c52"
            ],
            [
            "name"=> "Sotero Jesús García Reséndiz",
            "tagID"=> "654bd77ea9c6a"
            ],
            [
            "name"=> "Sergio Troncoso Paredes",
            "tagID"=> "654bd77eaaac4"
            ],
            [
            "name"=> "Víctor Tapia Alfaro",
            "tagID"=> "654bd77eab97a"
            ],
            [
            "name"=> "Santiago Unda Haro",
            "tagID"=> "654bd77eac82f"
            ],
            [
            "name"=> "Gustavo Estolano Ojeda",
            "tagID"=> "654bd77ead70c"
            ],
            [
            "name"=> "Griselda Alejandrina Tellez Laguna",
            "tagID"=> "654bd77eae531"
            ],
            [
            "name"=> "Sergio Gabriel Flores Salorio",
            "tagID"=> "654bd77eaf337"
            ],
            [
            "name"=> "Odilón Romero Vázquez",
            "tagID"=> "654bd77eb0122"
            ],
            [
            "name"=> "Miguel Trujíllo Ortega",
            "tagID"=> "654bd77eb0f72"
            ],
            [
            "name"=> "José Luis Gaitán Morán",
            "tagID"=> "654bd77eb1e08"
            ],
            [
            "name"=> "Alberto Uríbe Osório",
            "tagID"=> "654bd77eb2c56"
            ],
            [
            "name"=> "Valeriano Fuentes López",
            "tagID"=> "654bd77eb3b40"
            ],
            [
            "name"=> "María Patricia Vázquez Romero",
            "tagID"=> "654bd77eb4993"
            ],
            [
            "name"=> "José Eduardo Valenzuela Olmeda",
            "tagID"=> "654bd77eb587d"
            ],
            [
            "name"=> "Valeria Marquez Chin",
            "tagID"=> "654bd77eb6742"
            ],
            [
            "name"=> "Verónica Cristina Alonso Juárez",
            "tagID"=> "654bd77eb7594"
            ],
            [
            "name"=> "Martin Arturo Vargas Nieto",
            "tagID"=> "654bd77eb8641"
            ],
            [
            "name"=> "Analizeth Carrillo Mendoza",
            "tagID"=> "654bd77eb9633"
            ],
            [
            "name"=> "Víctor Payán Navarro",
            "tagID"=> "654bd77eba4a3"
            ],
            [
            "name"=> "Víctor Manuel King García",
            "tagID"=> "654bd77ebb30c"
            ],
            [
            "name"=> "Víctor Manuel Hernández Caballero",
            "tagID"=> "654bd77ebc145"
            ],
            [
            "name"=> "Xochitl Josefina Pineda Rosas",
            "tagID"=> "654bd77ebcfb4"
            ],
            [
            "name"=> "Irma Yañez Colín",
            "tagID"=> "654bd77ebde30"
            ],
            [
            "name"=> "Carlos Razo Magallon",
            "tagID"=> "654bd77ebec64"
            ],
            [
            "name"=> "Mariana Araceli Ortega Calderón",
            "tagID"=> "654bd77ebfc84"
            ],
            [
            "name"=> "Julia Isabel Hernández Luna",
            "tagID"=> "654bd77ec0b2c"
            ],
            [
            "name"=> "Nayeli Moreno Nolasco",
            "tagID"=> "654bd77ec1ab3"
            ],
            [
            "name"=> "Elizabeth Katherine Yorton",
            "tagID"=> "654bd77ec2975"
            ],
            [
            "name"=> "Yolanda Aguilar Alvarez",
            "tagID"=> "654bd77ec37fd"
            ],
            [
            "name"=> "José Luis Caro Miranda",
            "tagID"=> "654bd77ec47ca"
            ],
            [
            "name"=> "Ana Karina Aguilera Lopez",
            "tagID"=> "654bd77ec57f1"
            ],
            [
            "name"=> "Patricia Méndez Paredes",
            "tagID"=> "654bd77ec6848"
            ],
            [
            "name"=> "Juan Jose Perez Barragan",
            "tagID"=> "654bd77ec7742"
            ],
            [
            "name"=> "Jose Antonio Alejandri Ramos",
            "tagID"=> "654bd77ec876c"
            ],
            [
            "name"=> "Eva Cecilia Hernández Contreras",
            "tagID"=> "654bd77ec9603"
            ],
            [
            "name"=> "Ana Dolores Ocegueda Estrada",
            "tagID"=> "654bd77eca660"
            ],
            [
            "name"=> "Yael Guadalupe Rocha Moreno",
            "tagID"=> "654bd77ecb4e4"
            ],
            [
            "name"=> "Enrique Eduardo Milán Moreno",
            "tagID"=> "654bd77ecc207"
            ],
            [
            "name"=> "Juan Carlos Tamayo Silva",
            "tagID"=> "654bd77ecce77"
            ],
            [
            "name"=> "Jacqueline Brown Romero",
            "tagID"=> "654bd77ecdbfa"
            ],
            [
            "name"=> "Esteban Gomez Morales",
            "tagID"=> "654bd77ece960"
            ],
            [
            "name"=> "Tizoc Gutiérrez Hernández",
            "tagID"=> "654bd77ecfc0d"
            ],
            [
            "name"=> "Jesús Hernández Illescas",
            "tagID"=> "654bd77ed09a3"
            ],
            [
            "name"=> "Jose Andres Godoy Macias",
            "tagID"=> "654bd77ed1737"
            ],
            [
            "name"=> "Raul Ruvalcaba Sufy",
            "tagID"=> "654bd77ed25df"
            ],
            [
            "name"=> "Javier Chávez Tapia",
            "tagID"=> "654bd77ed344d"
            ],
            [
            "name"=> "Rodolfo Muriel Vizcaino",
            "tagID"=> "654bd77ed4518"
            ],
            [
            "name"=> "Ruth Yadira Luna Rojas",
            "tagID"=> "654bd77ed53fe"
            ],
            [
            "name"=> "Alfredo Fuentes Duarte",
            "tagID"=> "654bd77ed6207"
            ],
            [
            "name"=> "Alfredo Perez Ordoñez",
            "tagID"=> "654bd77ed700c"
            ],
            [
            "name"=> "Abril Alejandra Chuela Hernandez",
            "tagID"=> "654bd77ed9d6e"
            ],
            [
            "name"=> "Mónica Estefanía De la Torre Pérez",
            "tagID"=> "654bd77edaf4d"
            ],
            [
            "name"=> "Alejandro Hernández Camberos",
            "tagID"=> "654bd77edc2f6"
            ],
            [
            "name"=> "Rodolfo Ismael Jimenez Martinez",
            "tagID"=> "654bd77edd2bd"
            ],
            [
            "name"=> "Raul Toledo Perez",
            "tagID"=> "654bd77ede158"
            ],
            [
            "name"=> "Ricardo Salinas Valiente",
            "tagID"=> "654bd77edefe3"
            ],
            [
            "name"=> "Miguel Alejandro Longinos Vega",
            "tagID"=> "654bd77edfeea"
            ],
            [
            "name"=> "Ismael Orozco Prado",
            "tagID"=> "654bd77ee0f4b"
            ],
            [
            "name"=> "Barbara Leonor Ramírez Lara",
            "tagID"=> "654bd77ee1f90"
            ],
            [
            "name"=> "Walter Alan López Cadena",
            "tagID"=> "654bd77ee2f92"
            ],
            [
            "name"=> "Priscilla Lamshing Salinas",
            "tagID"=> "654bd77ee40bd"
            ],
            [
            "name"=> "Jose Tomas Rodriguez Martinez",
            "tagID"=> "654bd77ee5805"
            ],
            [
            "name"=> "Xóchitl Santiago Reyes",
            "tagID"=> "654bd77ee75e1"
            ],
            [
            "name"=> "Griselda Guadalupe Vargas Robles",
            "tagID"=> "654bd77ee91be"
            ],
            [
            "name"=> "Celeste Elisa Plowells Cavazos",
            "tagID"=> "654bd77eeaec9"
            ],
            [
            "name"=> "Mario Alberto Mata Vazquez",
            "tagID"=> "654bd77eeca26"
            ],
            [
            "name"=> "Dulce Maria Aguilar Mata",
            "tagID"=> "654bd77eedbf1"
            ],
            [
            "name"=> "Oscar Amilcar Rubio Olvera",
            "tagID"=> "654bd77eeef7a"
            ],
            [
            "name"=> "Sergio Simerman Sanchez",
            "tagID"=> "654bd77eefe92"
            ],
            [
            "name"=> "Miguel Ángel Robles Trejo",
            "tagID"=> "654bd77ef0f8e"
            ],
            [
            "name"=> "Miguel Angel Mora López",
            "tagID"=> "654bd77ef1e38"
            ],
            [
            "name"=> "Mariela Barragan Quiñones",
            "tagID"=> "654bd77ef34c9"
            ],
            [
            "name"=> "Maribel Avila Mendoza",
            "tagID"=> "654bd77f00900"
            ],
            [
            "name"=> "César Alejandro Lopez Nava",
            "tagID"=> "654bd77f01e3a"
            ],
            [
            "name"=> "María Guadalupe del Socorro Lagunes Huerta",
            "tagID"=> "654bd77f0302d"
            ],
            [
            "name"=> "Marina Beatríz López Rubio",
            "tagID"=> "654bd77f04231"
            ],
            [
            "name"=> "Saul Villa Bahena",
            "tagID"=> "654bd77f053e3"
            ],
            [
            "name"=> "Raymundo López Cárdenas",
            "tagID"=> "654bd77f066d3"
            ],
            [
            "name"=> "Magaly Ramírez González",
            "tagID"=> "654bd77f07bac"
            ],
            [
            "name"=> "Karina Diaz Ramirez",
            "tagID"=> "654bd77f08cbd"
            ],
            [
            "name"=> "Martha Amparo Téllez Pérez",
            "tagID"=> "654bd77f09c6b"
            ],
            [
            "name"=> "Yuri Archivaldo Vargas Cuéllar",
            "tagID"=> "654bd77f0ad64"
            ],
            [
            "name"=> "Jorge Ramirez Martinez",
            "tagID"=> "654bd77f0beb7"
            ],
            [
            "name"=> "Maria Fernanda Calderon Maya",
            "tagID"=> "654bd77f0d01d"
            ],
            [
            "name"=> "Víctor Manuel Martínez Guzmán",
            "tagID"=> "654bd77f0e123"
            ],
            [
            "name"=> "Inocencio Suárez Salazar",
            "tagID"=> "654bd77f0f23d"
            ],
            [
            "name"=> "Marco Antonio Mendoza Ojeda",
            "tagID"=> "654bd77f103ab"
            ],
            [
            "name"=> "Julio Domingo Pacheco Amador",
            "tagID"=> "654bd77f11561"
            ],
            [
            "name"=> "Miguel Ángel González Cruz",
            "tagID"=> "654bd77f127ca"
            ],
            [
            "name"=> "Carlos Alberto Gamez Villalobos",
            "tagID"=> "654bd77f13928"
            ],
            [
            "name"=> "Luz María Olivares Rodríguez",
            "tagID"=> "654bd77f14a49"
            ],
            [
            "name"=> "Miguel Ángel Santos León",
            "tagID"=> "654bd77f15b90"
            ],
            [
            "name"=> "Martha Alicia Pérez Gopar",
            "tagID"=> "654bd77f16cbd"
            ],
            [
            "name"=> "Alejandro Rojas Andrews",
            "tagID"=> "654bd77f17bdb"
            ],
            [
            "name"=> "Ana Cristina Azua Najera",
            "tagID"=> "654bd77f18aa0"
            ],
            [
            "name"=> "José Pablo Unda Haro",
            "tagID"=> "654bd77f19911"
            ],
            [
            "name"=> "Jose Rafael Lara Fraire",
            "tagID"=> "654bd77f1a7c7"
            ],
            [
            "name"=> "Romel Dario Resendiz Ramírez",
            "tagID"=> "654bd77f1b608"
            ],
            [
            "name"=> "Raul De La Cerda Navarro",
            "tagID"=> "654bd77f1c4fd"
            ],
            [
            "name"=> "Gerardo Resendiz Cruz",
            "tagID"=> "654bd77f1d3b7"
            ],
            [
            "name"=> "Maria Elizabeth Alvarez Rodriguez",
            "tagID"=> "654bd77f1e23e"
            ],
            [
            "name"=> "Miriam Chantale Vega Lopez",
            "tagID"=> "654bd77f1f0fe"
            ],
            [
            "name"=> "José Ramírez Raya",
            "tagID"=> "654bd77f1ff32"
            ],
            [
            "name"=> "Elida Zavala Gómez",
            "tagID"=> "654bd77f20ea4"
            ],
            [
            "name"=> "Salvador Tirado Camarena",
            "tagID"=> "654bd77f21fb2"
            ],
            [
            "name"=> "Gloria Pila Aranda",
            "tagID"=> "654bd77f23fec"
            ],
            [
            "name"=> "Oscar Trujillo Nava",
            "tagID"=> "654bd77f24fa7"
            ],
            [
            "name"=> "Arturo Partido Ramírez",
            "tagID"=> "654bd77f25ed6"
            ],
            [
            "name"=> "Natalia Lizola Arvizu",
            "tagID"=> "654bd77f26da6"
            ],
            [
            "name"=> "Raul Delgado Valdez",
            "tagID"=> "654bd77f27d3a"
            ],
            [
            "name"=> "Nancy Anai Pérez Rincón",
            "tagID"=> "654bd77f28b0f"
            ],
            [
            "name"=> "Esau Waldo Montoya Jiménez",
            "tagID"=> "654bd77f299e2"
            ],
            [
            "name"=> "Juan Humberto Gutiérrez Alanís",
            "tagID"=> "654bd77f2a88c"
            ],
            [
            "name"=> "Marlen Erika Montes Cardenas",
            "tagID"=> "654bd77f2b6ef"
            ],
            [
            "name"=> "Arandi Ávila Reséndiz",
            "tagID"=> "654bd77f2c58f"
            ],
            [
            "name"=> "Martha Hilda Rubio Cacique",
            "tagID"=> "654bd77f2d52d"
            ],
            [
            "name"=> "Mario Héctor Blancas Ojeda",
            "tagID"=> "654bd77f2e3cb"
            ],
            [
            "name"=> "Clarinda Alejandra Garibay Zavala",
            "tagID"=> "654bd77f2f2a8"
            ],
            [
            "name"=> "Blanca Tinoco Sámano",
            "tagID"=> "654bd77f30278"
            ],
            [
            "name"=> "Raquel Márquez Zermeño",
            "tagID"=> "654bd77f311ed"
            ],
            [
            "name"=> "Yamilet Hernández Avendaño",
            "tagID"=> "654bd77f32055"
            ],
            [
            "name"=> "Samaria Cruz Santiago",
            "tagID"=> "654bd77f32f8b"
            ],
            [
            "name"=> "Rafael Hernández Aragón",
            "tagID"=> "654bd77f33f7a"
            ],
            [
            "name"=> "Mauricio Lopez Acevedo",
            "tagID"=> "654bd77f35062"
            ],
            [
            "name"=> "Laura Isabel Panduro Valdez",
            "tagID"=> "654bd77f35ec8"
            ],
            [
            "name"=> "Maricela Galicia Hernandez",
            "tagID"=> "654bd77f36d3b"
            ],
            [
            "name"=> "Andrea Lizbeth Corona Cordero",
            "tagID"=> "654bd77f37bdd"
            ],
            [
            "name"=> "Mirna Alicia Salas Samaniego",
            "tagID"=> "654bd77f38a28"
            ],
            [
            "name"=> "Gabriela Pereda Torres",
            "tagID"=> "654bd77f39965"
            ],
            [
            "name"=> "Yunuen Ramirez Narvaez",
            "tagID"=> "654bd77f3a77b"
            ],
            [
            "name"=> "Karla Lourdes Nava Tirado",
            "tagID"=> "654bd77f3b65a"
            ],
            [
            "name"=> "Luis Alfredo Domínguez Sotelo",
            "tagID"=> "654bd77f3c57e"
            ],
            [
            "name"=> "Yine Hernández Márquez",
            "tagID"=> "654bd77f3d37a"
            ],
            [
            "name"=> "Marco Antonio Galvez Roldan",
            "tagID"=> "654bd77f3e0cd"
            ],
            [
            "name"=> "Lidia Edith Diaz Romero",
            "tagID"=> "654bd77f3ed8e"
            ],
            [
            "name"=> "Diana Yaneli Aquino Villagómez",
            "tagID"=> "654bd77f3fbac"
            ],
            [
            "name"=> "Gibrán Peña Bonales",
            "tagID"=> "654bd77f40b0a"
            ],
            [
            "name"=> "Carlos Alberto Velasco Alonso",
            "tagID"=> "654bd77f41a74"
            ],
            [
            "name"=> "Ramiro Soto Soto",
            "tagID"=> "654bd77f42a46"
            ],
            [
            "name"=> "Steephany Guzman Luna",
            "tagID"=> "654bd77f439ab"
            ],
            [
            "name"=> "Daniel Vargas Becerril",
            "tagID"=> "654bd77f44852"
            ],
            [
            "name"=> "Arianna Guerrero Campa",
            "tagID"=> "654bd77f455f7"
            ],
            [
            "name"=> "Gabriela Paloma Morlan Lopez",
            "tagID"=> "654bd77f463f1"
            ],
            [
            "name"=> "Richard Anaya Ornelas",
            "tagID"=> "654bd77f470cf"
            ],
            [
            "name"=> "Ricardo Ugalde Carreón",
            "tagID"=> "654bd77f47ed3"
            ],
            [
            "name"=> "Jorge Jesús Salinas González",
            "tagID"=> "654bd77f48dad"
            ],
            [
            "name"=> "Perla Hernandez Licea",
            "tagID"=> "654bd77f4a200"
            ],
            [
            "name"=> "Rebeca Elisa Guerrero Patiño",
            "tagID"=> "654bd77f4b2f1"
            ],
            [
            "name"=> "Nicolás Paredes Melesio",
            "tagID"=> "654bd77f4c1ed"
            ],
            [
            "name"=> "Yair Hernández Santiago",
            "tagID"=> "654bd77f4d107"
            ],
            [
            "name"=> "María Elena Rivera Reynoso",
            "tagID"=> "654bd77f4df37"
            ],
            [
            "name"=> "Luis Manuel Suárez Flores",
            "tagID"=> "654bd77f4ef22"
            ],
            [
            "name"=> "Lino Eduardo Cardiel Marmolejo",
            "tagID"=> "654bd77f4fe60"
            ],
            [
            "name"=> "José Antonio Chávez Barrera",
            "tagID"=> "654bd77f50ce5"
            ],
            [
            "name"=> "Irma Garrido Lecona",
            "tagID"=> "654bd77f51a4d"
            ],
            [
            "name"=> "Jorge de Jesús Field Cortazares",
            "tagID"=> "654bd77f52ee2"
            ],
            [
            "name"=> "José Isaac Valenciano Vega",
            "tagID"=> "654bd77f53d3e"
            ],
            [
            "name"=> "Eugenia Hernández Suárez",
            "tagID"=> "654bd77f54c00"
            ],
            [
            "name"=> "Gabriela Ramírez García",
            "tagID"=> "654bd77f55a69"
            ],
            [
            "name"=> "Fernando de Jesús Lavalley Echeverría",
            "tagID"=> "654bd77f568cc"
            ],
            [
            "name"=> "Nadia Gisela Ramirez Vargas",
            "tagID"=> "654bd77f576ed"
            ],
            [
            "name"=> "Ignacio Alberto Portales Pérez",
            "tagID"=> "654bd77f58578"
            ],
            [
            "name"=> "Edith Lechuga Ávila",
            "tagID"=> "654bd77f593be"
            ],
            [
            "name"=> "Delia Figueroa Pineda",
            "tagID"=> "654bd77f5a172"
            ],
            [
            "name"=> "Martha González Tepozan",
            "tagID"=> "654bd77f5affa"
            ],
            [
            "name"=> "Eduardo Almanza Madariaga",
            "tagID"=> "654bd77f5be1c"
            ],
            [
            "name"=> "María Auxilio Torres Silva",
            "tagID"=> "654bd77f5cd36"
            ],
            [
            "name"=> "Rodolfo Ruiz Garcia",
            "tagID"=> "654bd77f5daf4"
            ],
            [
            "name"=> "Emmanuel Torres Arnaut",
            "tagID"=> "654bd77f5e781"
            ],
            [
            "name"=> "Maria Mercedes Mercado Meza",
            "tagID"=> "654bd77f5f585"
            ],
            [
            "name"=> "Darío Ángeles Rodríguez",
            "tagID"=> "654bd77f6036f"
            ],
            [
            "name"=> "Hugo Villa Ramírez",
            "tagID"=> "654bd77f61231"
            ],
            [
            "name"=> "María Angélica García Burciaga",
            "tagID"=> "654bd77f620e2"
            ],
            [
            "name"=> "Brenda Abigail Reyes Huerta",
            "tagID"=> "654bd77f62f11"
            ],
            [
            "name"=> "Jose Enrique Mancilla Anguiano",
            "tagID"=> "654bd77f63d78"
            ],
            [
            "name"=> "Raúl Linares Osoyo",
            "tagID"=> "654bd77f64baa"
            ],
            [
            "name"=> "Noe Belmar Díaz Gómez",
            "tagID"=> "654bd77f65a2e"
            ],
            [
            "name"=> "Mayra Patricia Arteaga Mancera",
            "tagID"=> "654bd77f6689b"
            ],
            [
            "name"=> "Adrián Ceballos Bocanegra",
            "tagID"=> "654bd77f6777e"
            ],
            [
            "name"=> "Arianna Parra Ibarraran",
            "tagID"=> "654bd77f685ca"
            ],
            [
            "name"=> "Marco Antonio Urbina Ayala",
            "tagID"=> "654bd77f6949f"
            ],
            [
            "name"=> "María del Pilar Reveles García",
            "tagID"=> "654bd77f6a2d6"
            ],
            [
            "name"=> "Mariana Canseco Herrera",
            "tagID"=> "654bd77f6b0f3"
            ],
            [
            "name"=> "Jesús Bernardo González Castellanos",
            "tagID"=> "654bd77f6bf68"
            ],
            [
            "name"=> "Selene Marcelo Orozco",
            "tagID"=> "654bd77f6cd2d"
            ],
            [
            "name"=> "Patricia Díaz López",
            "tagID"=> "654bd77f6dcab"
            ],
            [
            "name"=> "Jose Antonio Rojas Gomez",
            "tagID"=> "654bd77f6ec5d"
            ],
            [
            "name"=> "Samuel Guzmán Tobías",
            "tagID"=> "654bd77f6fba6"
            ],
            [
            "name"=> "Ana Laura Moguel Mendez",
            "tagID"=> "654bd77f70992"
            ],
            [
            "name"=> "Arturo Espíndola Díaz",
            "tagID"=> "654bd77f7172d"
            ],
            [
            "name"=> "Alejandra Rojas Ramos",
            "tagID"=> "654bd77f72509"
            ],
            [
            "name"=> "Ander Emmanuel Octavio Dubon Suarez",
            "tagID"=> "654bd77f73196"
            ],
            [
            "name"=> "Rafael Zepeda Ramos",
            "tagID"=> "654bd77f73eb4"
            ],
            [
            "name"=> "José Luis Morelos Poxtan",
            "tagID"=> "654bd77f74d0e"
            ],
            [
            "name"=> "Maurilio de Jesus Romero Hernandez",
            "tagID"=> "654bd77f75c92"
            ],
            [
            "name"=> "Edson Eduardo Cruz Gonzalez",
            "tagID"=> "654bd77f76ae2"
            ],
            [
            "name"=> "Nelly Guadalupe Morales Molina",
            "tagID"=> "654bd77f7793a"
            ],
            [
            "name"=> "Julio Cesar Pineda Hernández",
            "tagID"=> "654bd77f787a4"
            ],
            [
            "name"=> "José Arenas Benhumea",
            "tagID"=> "654bd77f798c6"
            ],
            [
            "name"=> "Anarely Peralta Olivares",
            "tagID"=> "654bd77f7acb5"
            ],
            [
            "name"=> "Ciro Hernández Bernabé",
            "tagID"=> "654bd77f7bf60"
            ],
            [
            "name"=> "Israel Rincón Zarate",
            "tagID"=> "654bd77f7cf58"
            ],
            [
            "name"=> "Victor Manuel Sanchez Molina",
            "tagID"=> "654bd77f7df2e"
            ],
            [
            "name"=> "Francisco Alfonso Solis Espinoza",
            "tagID"=> "654bd77f7ef45"
            ],
            [
            "name"=> "Mario Aguilar Gutierrez",
            "tagID"=> "654bd77f7fe86"
            ],
            [
            "name"=> "Nicolás Árias García",
            "tagID"=> "654bd77f80d02"
            ],
            [
            "name"=> "Francisco Gutiérrez Castillo",
            "tagID"=> "654bd77f81d06"
            ],
            [
            "name"=> "Noe Ortiz Cruz",
            "tagID"=> "654bd77f82dac"
            ],
            [
            "name"=> "Carlos López Candiani",
            "tagID"=> "654bd77f83db5"
            ],
            [
            "name"=> "Claudia Montesinos Ramírez",
            "tagID"=> "654bd77f84d17"
            ],
            [
            "name"=> "Eva Julieta Hernández Archundia",
            "tagID"=> "654bd77f85bcd"
            ],
            [
            "name"=> "Rafael Domínguez Aguilar",
            "tagID"=> "654bd77f86bfc"
            ],
            [
            "name"=> "Ines Georgina Lopez Pineda",
            "tagID"=> "654bd77f87ad0"
            ],
            [
            "name"=> "Arturo de Jesus Buenfil Herrera",
            "tagID"=> "654bd77f88afb"
            ],
            [
            "name"=> "Armando Cuauhtémoc Garduño Ruíz",
            "tagID"=> "654bd77f89bd9"
            ],
            [
            "name"=> "María del Rayo Crispín Rodríguez",
            "tagID"=> "654bd77f8aaad"
            ],
            [
            "name"=> "Julian Saenz Garcia",
            "tagID"=> "654bd77f8b8dd"
            ],
            [
            "name"=> "José Mario García Martínez",
            "tagID"=> "654bd77f8c7c4"
            ],
            [
            "name"=> "Miguel Angel Karlis Rangel",
            "tagID"=> "654bd77f8d5eb"
            ],
            [
            "name"=> "Jorge Alberto Torres Bernal",
            "tagID"=> "654bd77f8e440"
            ],
            [
            "name"=> "Kathia Castelán Muñoz",
            "tagID"=> "654bd77f8f333"
            ],
            [
            "name"=> "Leticia Valenzuela García",
            "tagID"=> "654bd77f901de"
            ],
            [
            "name"=> "Mara Areli Guajardo Gonzalez",
            "tagID"=> "654bd77f9104c"
            ],
            [
            "name"=> "Miguel Ángel Maldonado Fuerte",
            "tagID"=> "654bd77f91ec2"
            ],
            [
            "name"=> "Oswaldo Juangorena Lopez",
            "tagID"=> "654bd77f92dbf"
            ],
            [
            "name"=> "Sergio Guadalupe Jacobo Díaz",
            "tagID"=> "654bd77f93e70"
            ],
            [
            "name"=> "Aleyda Monreal Malacara",
            "tagID"=> "654bd77f94ead"
            ],
            [
            "name"=> "Fidel Castañeda Contreras",
            "tagID"=> "654bd77f95d51"
            ],
            [
            "name"=> "Irene María Garcia Olivo",
            "tagID"=> "654bd77f96ec2"
            ],
            [
            "name"=> "Dulce Paola Navarrete Garcia",
            "tagID"=> "654bd77f97eee"
            ],
            [
            "name"=> "Ben David Valdés Ramos",
            "tagID"=> "654bd77f98bfb"
            ],
            [
            "name"=> "Lucía Leonor Cuevas López",
            "tagID"=> "654bd77f99943"
            ],
            [
            "name"=> "Sandra Patricia Lagunes Salazar",
            "tagID"=> "654bd77f9a5a6"
            ],
            [
            "name"=> "Ary Pérez Jaramillo",
            "tagID"=> "654bd77f9b27a"
            ],
            [
            "name"=> "Eltzy Rubí Rocha Rivera",
            "tagID"=> "654bd77f9c06a"
            ],
            [
            "name"=> "Jorge Arturo Chávez Saénz",
            "tagID"=> "654bd77f9cda0"
            ],
            [
            "name"=> "Olivia Blancas Jacobo",
            "tagID"=> "654bd77f9da0f"
            ],
            [
            "name"=> "Oscar Eduardo Ceja Mejia",
            "tagID"=> "654bd77f9e6f2"
            ],
            [
            "name"=> "Edgar Ivan Lopez Martinez",
            "tagID"=> "654bd77f9f4ea"
            ],
            [
            "name"=> "Jesus Alfredo Ayala Robles",
            "tagID"=> "654bd77fa029a"
            ],
            [
            "name"=> "Montserrat Saucedo González",
            "tagID"=> "654bd77fa1004"
            ],
            [
            "name"=> "Rocío del Carmen Bernal Zamora",
            "tagID"=> "654bd77fa1da8"
            ],
            [
            "name"=> "Yolanda Alicia Castillo De León",
            "tagID"=> "654bd77fa2b98"
            ],
            [
            "name"=> "Laura Elena Muñoz Pérez",
            "tagID"=> "654bd77fa392b"
            ],
            [
            "name"=> "ROSARIO GUADALUPE DENIS FAJARDO",
            "tagID"=> "654bd77fa46c8"
            ],
            [
            "name"=> "Carlos Mijail Suárez Arredondo",
            "tagID"=> "654bd77fa5499"
            ],
            [
            "name"=> "Yahaira Iracema Requena Castro",
            "tagID"=> "654bd77fa61b3"
            ],
            [
            "name"=> "Jesus Javier Solis Flores",
            "tagID"=> "654bd77fa726a"
            ],
            [
            "name"=> "Érika Guadalupe Rodríguez De los Reyes",
            "tagID"=> "654bd77fa818e"
            ],
            [
            "name"=> "Francisco Raymundo Sánchez Garza",
            "tagID"=> "654bd77fa90b5"
            ],
            [
            "name"=> "Mariana Herrera Pen",
            "tagID"=> "654bd77fa9ee4"
            ],
            [
            "name"=> "María Teresa Medina Durón",
            "tagID"=> "654bd77faaec7"
            ],
            [
            "name"=> "Jesús Flores Robles",
            "tagID"=> "654bd77fabda6"
            ],
            [
            "name"=> "Raúl Garza Bulnes",
            "tagID"=> "654bd77facb3f"
            ],
            [
            "name"=> "Fabiola Burciaga Córdova",
            "tagID"=> "654bd77fad8f4"
            ],
            [
            "name"=> "Gerardo Javier Muraira Calvillo",
            "tagID"=> "654bd77faea53"
            ],
            [
            "name"=> "Jair Sierra Flores",
            "tagID"=> "654bd77faf971"
            ],
            [
            "name"=> "Yadira Nereida Angel Correa",
            "tagID"=> "654bd77fb07df"
            ],
            [
            "name"=> "Dante Iván Terrones Martínez",
            "tagID"=> "654bd77fb167b"
            ],
            [
            "name"=> "Sindy Allazmin Rodriguez Miranda",
            "tagID"=> "654bd77fb2523"
            ],
            [
            "name"=> "José Huerta Reyes",
            "tagID"=> "654bd77fb356d"
            ],
            [
            "name"=> "Gabriel Martín Vargas Duarte",
            "tagID"=> "654bd77fb45fe"
            ],
            [
            "name"=> "Alfonso Javier Escudero Rendón",
            "tagID"=> "654bd77fb53d5"
            ],
            [
            "name"=> "Marco Antonio Ibarra Guzman",
            "tagID"=> "654bd77fb6185"
            ],
            [
            "name"=> "Maria Cristina Ceballos Vela",
            "tagID"=> "654bd77fb6f69"
            ],
            [
            "name"=> "Fabiola Cruz Garrido",
            "tagID"=> "654bd77fb7c78"
            ],
            [
            "name"=> "Neyl Córdova Lara",
            "tagID"=> "654bd77fb89b0"
            ],
            [
            "name"=> "Rosa Miguel Fernández Nolasco",
            "tagID"=> "654bd77fb96ac"
            ],
            [
            "name"=> "Cesar Augusto Gil Rosales",
            "tagID"=> "654bd77fba5aa"
            ],
            [
            "name"=> "Isaías Santiago De La Rosa",
            "tagID"=> "654bd77fbb342"
            ],
            [
            "name"=> "Roberto Herrera Torres",
            "tagID"=> "654bd77fbc052"
            ],
            [
            "name"=> "Guadalupe Hidalgo Domínguez",
            "tagID"=> "654bd77fbcd9e"
            ],
            [
            "name"=> "Joshue Eduardo Vergara Gámez",
            "tagID"=> "654bd77fbdb81"
            ],
            [
            "name"=> "Jaime David Alejo Cisneros Méndez",
            "tagID"=> "654bd77fbe9c5"
            ],
            [
            "name"=> "Juan José Vázquez De la Garza",
            "tagID"=> "654bd77fbf825"
            ],
            [
            "name"=> "Christopher Bello López Portillo",
            "tagID"=> "654bd77fc058a"
            ],
            [
            "name"=> "Sergio Reynoso De Mendoza",
            "tagID"=> "654bd77fc1411"
            ],
            [
            "name"=> "Ricardo Sánchez Stone",
            "tagID"=> "654bd77fc22ff"
            ],
            [
            "name"=> "Flor Lucía Morales Morales",
            "tagID"=> "654bd77fc31e1"
            ],
            [
            "name"=> "Elisa García Morales",
            "tagID"=> "654bd77fc406a"
            ],
            [
            "name"=> "Sergio Luis Hernández Aceves",
            "tagID"=> "654bd77fc4f70"
            ],
            [
            "name"=> "Cesáreo González Bernal",
            "tagID"=> "654bd77fc614d"
            ],
            [
            "name"=> "Marisa Jiménez Uríbe",
            "tagID"=> "654bd77fc6ee4"
            ],
            [
            "name"=> "Horacio García Camarena",
            "tagID"=> "654bd77fc7c38"
            ],
            [
            "name"=> "Álvaro Bautista Vásquez",
            "tagID"=> "654bd77fc8a5f"
            ],
            [
            "name"=> "Martín Ricardo Rodríguez Mora",
            "tagID"=> "654bd77fc990d"
            ],
            [
            "name"=> "Juan Miguel Quiroz Gonzalez",
            "tagID"=> "654bd77fca7e5"
            ],
            [
            "name"=> "Salvador González Vargas",
            "tagID"=> "654bd77fcb78e"
            ],
            [
            "name"=> "J Felipe Rojas Nieto",
            "tagID"=> "654bd77fcc620"
            ],
            [
            "name"=> "Mercedes Maria Teresa Gomez Mondragon",
            "tagID"=> "654bd77fcd475"
            ],
            [
            "name"=> "KARLA ALEJANDRA LARA MARTINEZ",
            "tagID"=> "654bd77fce40e"
            ],
            [
            "name"=> "Sergio Gonzalez Galaviz",
            "tagID"=> "654bd77fcf356"
            ],
            [
            "name"=> "Jesús Ríos Gaona",
            "tagID"=> "654bd77fd01e1"
            ],
            [
            "name"=> "Ana Elena Martinez Soto",
            "tagID"=> "654bd77fd103c"
            ],
            [
            "name"=> "Luis Javier Orozco Peña",
            "tagID"=> "654bd77fd1fca"
            ],
            [
            "name"=> "Carlos Augusto Soriano Beltran",
            "tagID"=> "654bd77fd2efd"
            ],
            [
            "name"=> "Gabriel Orozco Peña",
            "tagID"=> "654bd77fd3dc4"
            ],
            [
            "name"=> "Arturo Samano Ruiz",
            "tagID"=> "654bd77fd4cc6"
            ],
            [
            "name"=> "Antonio Padilla Bastida",
            "tagID"=> "654bd77fd5af5"
            ],
            [
            "name"=> "Sandra Lucrecia García Hernández",
            "tagID"=> "654bd77fd6dd2"
            ],
            [
            "name"=> "Armando Mendoza",
            "tagID"=> "654bd77fd7e20"
            ],
            [
            "name"=> "Jose Jesus Villa Medina",
            "tagID"=> "654bd77fd8c76"
            ],
            [
            "name"=> "Jose Humberto Evaristo Avila Watanabe",
            "tagID"=> "654bd77fd9bae"
            ],
            [
            "name"=> "Fernando Garcia Martinez",
            "tagID"=> "654bd77fdc9b9"
            ],
            [
            "name"=> "Sofía Pereira Corona",
            "tagID"=> "654bd77fdf07c"
            ],
            [
            "name"=> "Efrén Villegas Sánchez",
            "tagID"=> "654bd77fe0b7e"
            ],
            [
            "name"=> "Martha Gutiérrez De Gress",
            "tagID"=> "654bd77fe26b6"
            ],
            [
            "name"=> "Roberto Arizmendi Villanueva",
            "tagID"=> "654bd77fe3b07"
            ],
            [
            "name"=> "José Luna Ruíz",
            "tagID"=> "654bd77fe4c49"
            ],
            [
            "name"=> "René Silva Alvarado",
            "tagID"=> "654bd77fe5bb2"
            ],
            [
            "name"=> "Adrián Aarón Gutiérrez Villegas",
            "tagID"=> "654bd77fe6b0c"
            ],
            [
            "name"=> "Marisol Flores Martínez",
            "tagID"=> "654bd77fe7a7e"
            ],
            [
            "name"=> "Carlos Leyva Hernández",
            "tagID"=> "654bd77fe8a61"
            ],
            [
            "name"=> "Juan Roberto Enciso Espinosa",
            "tagID"=> "654bd77fea080"
            ],
            [
            "name"=> "Vicente Joaquín Lavielle Sotomayor",
            "tagID"=> "654bd77feb052"
            ],
            [
            "name"=> "Jesús Enrique Cuandón Escobar",
            "tagID"=> "654bd77febf8b"
            ],
            [
            "name"=> "Jorge Luis Medina Luna",
            "tagID"=> "654bd77fecf7f"
            ],
            [
            "name"=> "Héctor David Vera García",
            "tagID"=> "654bd77fede65"
            ],
            [
            "name"=> "Michelle Jazmin Segundo Zavala",
            "tagID"=> "654bd77ff0084"
            ],
            [
            "name"=> "Nora Alicia Aguilar Bernal",
            "tagID"=> "654bd77ff13b7"
            ],
            [
            "name"=> "David Oldak Skvirsky",
            "tagID"=> "654bd77ff25d7"
            ],
            [
            "name"=> "Paulo César Hidalgo Hernández",
            "tagID"=> "654bd77ff36fc"
            ],
            [
            "name"=> "Rogelio Vázquez Aguirre",
            "tagID"=> "654bd7800058b"
            ],
            [
            "name"=> "Monica Basaldua Tellez",
            "tagID"=> "654bd78001ce5"
            ],
            [
            "name"=> "Graciela Zárate Covarrubias",
            "tagID"=> "654bd78003537"
            ],
            [
            "name"=> "Raúl Francisco Trejo Velasco",
            "tagID"=> "654bd78004c4f"
            ],
            [
            "name"=> "Claudia Berenice Rodríguez",
            "tagID"=> "654bd780060ed"
            ],
            [
            "name"=> "Elizabeth Ramírez Camacho",
            "tagID"=> "654bd7800749d"
            ],
            [
            "name"=> "Rodolfo Silva Ruíz",
            "tagID"=> "654bd7800860b"
            ],
            [
            "name"=> "Andres Vazquez De la Isla",
            "tagID"=> "654bd7800976d"
            ],
            [
            "name"=> "Blanca Medina González",
            "tagID"=> "654bd7800a5f7"
            ],
            [
            "name"=> "Jorge Cuauhtemoc Lomelí Cisneros",
            "tagID"=> "654bd7800b637"
            ],
            [
            "name"=> "Laura Monica Del Llano Feregrino",
            "tagID"=> "654bd7800c5a0"
            ],
            [
            "name"=> "Juan Alfonso Lopez De la Rosa",
            "tagID"=> "654bd7800d649"
            ],
            [
            "name"=> "Javier Navarro Morales",
            "tagID"=> "654bd7800e766"
            ],
            [
            "name"=> "Luz Adriana Nájera Loredo",
            "tagID"=> "654bd7800f751"
            ],
            [
            "name"=> "Juan Enrique Franco Hernandez",
            "tagID"=> "654bd78010632"
            ],
            [
            "name"=> "Edgar Ulises San Vicente Santoscoy",
            "tagID"=> "654bd78011558"
            ],
            [
            "name"=> "Dagoberto Delgado Franco",
            "tagID"=> "654bd780123f5"
            ],
            [
            "name"=> "Salvador Villalpando Carrión",
            "tagID"=> "654bd780135af"
            ],
            [
            "name"=> "Adriana Leonor Salmoran",
            "tagID"=> "654bd780144ed"
            ],
            [
            "name"=> "Martha Cecília Razo Muñiz",
            "tagID"=> "654bd780153fa"
            ],
            [
            "name"=> "María Adela Ramírez Moreno",
            "tagID"=> "654bd78016542"
            ],
            [
            "name"=> "Yahiel Osorio Alamillo",
            "tagID"=> "654bd780174e4"
            ],
            [
            "name"=> "Pedro Iván Barrera Martínez",
            "tagID"=> "654bd780189f1"
            ],
            [
            "name"=> "Ernesto Alejandro Diantes Sanchez",
            "tagID"=> "654bd78019987"
            ],
            [
            "name"=> "José de Jesús Esquivel Barberena",
            "tagID"=> "654bd7801a92f"
            ],
            [
            "name"=> "Patricia López Flores",
            "tagID"=> "654bd7801b942"
            ],

            [
            "name"=> "Adriana García Sifuentes",
            "tagID"=> "654d5aacdda4e"
            ],
            [
            "name"=> "Alfonso Mazatan Davila",
            "tagID"=> "654d5aacdeb1c"
            ],
            [
            "name"=> "Angélica Gutiérrez Juárez",
            "tagID"=> "654d5aace007f"
            ],
            [
            "name"=> "Carlos Alberto Galindo Hernandez",
            "tagID"=> "654d5aace0f2b"
            ],
            [
            "name"=> "Carlos Alberto Melendrez Barrios",
            "tagID"=> "654d5aace1ca5"
            ],
            [
            "name"=> "Evaldo Jesús Rodríguez Mejía",
            "tagID"=> "654d5aace289c"
            ],
            [
            "name"=> "Francisco Ramírez Santa Rita",
            "tagID"=> "654d5aace3454"
            ],
            [
            "name"=> "Gabriela Delgadillo Peniche",
            "tagID"=> "654d5aace3dac"
            ],
            [
            "name"=> "Gabriela López Arballo",
            "tagID"=> "654d5aace47b0"
            ],
            [
            "name"=> "Gabriela Vicenta Santiago Soriano",
            "tagID"=> "654d5aace551a"
            ],
            [
            "name"=> "Gabriela Virginia Escudero Lourdes",
            "tagID"=> "654d5aace5ed8"
            ],
            [
            "name"=> "Gabriela Zarco Aguilar",
            "tagID"=> "654d5aace68b8"
            ],
            [
            "name"=> "José Gamaliel Hernández Ochoa",
            "tagID"=> "654d5aace72fb"
            ],
            [
            "name"=> "José Ignacio Alcántara Lomelí",
            "tagID"=> "654d5aace7c60"
            ],
            [
            "name"=> "Juan Carlos Melendrez Gálvez",
            "tagID"=> "654d5aace87ed"
            ],
            [
            "name"=> "Juan Francisco Aguilar Cañedo",
            "tagID"=> "654d5aace9218"
            ],
            [
            "name"=> "Juan Márquez Jiménez",
            "tagID"=> "654d5aace9d9c"
            ],
            [
            "name"=> "Julio César Salinas Elizondo",
            "tagID"=> "654d5aaceaa12"
            ],
            [
            "name"=> "Leticia Gabriela Colina Rubio",
            "tagID"=> "654d5aaceb8ad"
            ],
            [
            "name"=> "Luis Gerardo Martínez Valadés",
            "tagID"=> "654d5aacec765"
            ],
            [
            "name"=> "Luis Mauricio Franco Hernández",
            "tagID"=> "654d5aaced390"
            ],
            [
            "name"=> "Mario Ángel Quiñones Peña",
            "tagID"=> "654d5aacedf9a"
            ],
            [
            "name"=> "Mario Gerardo Villarreal Padilla",
            "tagID"=> "654d5aaceeb22"
            ],
            [
            "name"=> "Martha Alicia Gaxiola Paredes",
            "tagID"=> "654d5aacef617"
            ],
            [
            "name"=> "Nalleli Alarcon Sanchez",
            "tagID"=> "654d5aacf007d"
            ],
            [
            "name"=> "Octavio Rodrigo Martínez Pérez",
            "tagID"=> "654d5aacf0bce"
            ],
            [
            "name"=> "Pedro Pablo Galícia Herrera",
            "tagID"=> "654d5aacf191c"
            ],
            [
            "name"=> "Rafael de Jesús Gallo Sandoval",
            "tagID"=> "654d5aacf2701"
            ],
            [
            "name"=> "Reymundo Juárez Barraza",
            "tagID"=> "654d5aacf317d"
            ],
            [
            "name"=> "Ricardo Arturo Martínez Orpinel",
            "tagID"=> "654d5aacf3c3a"
            ],
            [
            "name"=> "Roberto Monteverde Ortiz",
            "tagID"=> "654d5aad00464"
            ],
            [
            "name"=> "Victor García Arano",
            "tagID"=> "654d5aad01135"
            ],

            [
            "name"=> "Fernando Alberto Varela Bañuelos",
            "tagID"=> "655783ad46366"
            ],
            [
            "name"=> "Karen Gomez Arredondo",
            "tagID"=> "655783ad48978"
            ],
            [
            "name"=> "Adrián Vargas Archundia",
            "tagID"=> "655783ad4a972"
            ],
            [
            "name"=> "Edgar Miguel Ramírez Ramírez",
            "tagID"=> "655783ad4c2a3"
            ],
            [
            "name"=> "Juan Carlos Yahir Coutiño Guzmán",
            "tagID"=> "655783ad4dcbb"
            ],
            [
            "name"=> "Patricia Sonia López Garcés",
            "tagID"=> "655783ad4f92b"
            ]
    
        ];


        //Medicos
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
       
        
        foreach ($medicals as $medical) {
            $random_numbers = rand(01, 20);

            $name_parts = explode(' ', $medical["name"]);
    
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
            $create_medical->status = 1;
            $create_medical->user_id = $create_user->id ;
            $create_medical->tag =$medical["tagID"];
            $create_medical->save();

            DB::table('role_user')->insert([
                'user_id' => $create_user->id,
                'role_id' => 1,
                'user_type' => 'App\Models\User',
            ]);
        
        }

    }
}
