Kas ir API? 

api pilnajā vārdā ir application programming interface kas tev ļauj sazināties backend ar frontend

- Kā deklarēt mainīgo PHP valodā?

$mainīgais = 0;

- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

laravel ir php framework kas izmanto MVC arhitektūru, lai padarītu daudzas lietas vienkāršakas lieliem projektiem.

- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

tapēc jo tas ir objektu orientēts

- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra

Public function index()
{
    return User::where('rating','>',4)->get;
}




