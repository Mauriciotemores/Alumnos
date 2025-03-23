use Tests\TestCase;
use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlumnoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_se_pueden_listar_alumnos()
    {
        Alumno::factory(2)->create();

        $response = $this->get('/alumnos');

        $response->assertStatus(200);
        $response->assertSee('Lista de Alumnos');
    }

    public function test_se_muestra_formulario_de_creacion()
    {
        $response = $this->get('/alumnos/create');

        $response->assertStatus(200);
        $response->assertSee('Crear Alumno');
    }

    public function test_se_puede_crear_un_alumno()
    {
        $datos = [
            'nombre' => 'Juan Pérez',
            'correo' => 'juan@example.com',
            'fecha_nacimiento' => '2000-01-01',
            'ciudad' => 'Ciudad X',
        ];

        $response = $this->post('/alumnos', $datos);

        $response->assertRedirect('/alumnos');
        $this->assertDatabaseHas('alumnos', ['correo' => 'juan@example.com']);
    }
}
