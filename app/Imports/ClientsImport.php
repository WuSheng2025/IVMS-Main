namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Client([
            'ChildCode'   => $row['childcode'],
            'FirstName'   => $row['firstname'],
            'MiddleName'  => $row['middlename'] ?? null,
            'LastName'    => $row['lastname'],
            'BirthDate'   => $row['birthdate'],
            'BirthPlace'  => $row['birthplace'],
        ]);
    }
}
