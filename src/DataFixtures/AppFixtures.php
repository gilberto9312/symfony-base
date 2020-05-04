<?php

namespace App\DataFixtures;

use App\Entity\ActivationPeriod;
use App\Entity\Company;
use App\Entity\Country;
use App\Entity\Event;
use App\Entity\Users;
use App\Entity\Level;
use App\Entity\MenuWindowSystem;
use App\Entity\Subscription;
use App\Entity\System;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    private const USERS = [
        [
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'name' => 'Piotr Jura',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => true
        ],
        [
            'username' => 'john_doe',
            'email' => 'john@blog.com',
            'name' => 'John Doe',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => true
        ],
        [
            'username' => 'rob_smith',
            'email' => 'rob@blog.com',
            'name' => 'Rob Smith',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => true
        ],
        [
            'username' => 'jenny_rowling',
            'email' => 'jenny@blog.com',
            'name' => 'Jenny Rowling',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => true
        ],
        [
            'username' => 'han_solo',
            'email' => 'han@blog.com',
            'name' => 'Han Solo',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => false
        ],
        [
            'username' => 'jedi_knight',
            'email' => 'jedi@blog.com',
            'name' => 'Jedi Knight',
            'password' => 'secret123#',
            'roles' => [Users::ROLE_USER],
            'enabled' => true
        ],
    ];

    private const LEVELS = [
        [
            'name'=>'Distributor',
            'been_remove'=>0
        ],
        [
            'name'=>'Company',
            'been_remove'=>0
        ],
        [
            'name'=>'Master',
            'been_remove'=>0
        ]
    ];

    private const SUSCRIPTIONS = [
        [
            'name'=>'Basic',
            'been_remove'=>0
        ],
        [
            'name'=>'Expert',
            'been_remove'=>0
        ],
        [
            'name'=>'Diamond',
            'been_remove'=>0
        ],
        [
            'name'=>'Unlimited',
            'been_remove'=>0
        ]
    ];

    private const SYSTEM = [
        [
            'name'=>'Security system',
            'codsystem'=>'SSS',
            'state'=>1,
            'locationFileImage'=>'public/imgsss.jpg',
            'access'=>'/security',
            'type'=>4,
            'position'=>1,
            'component'=>'system'
        ]
    ];

    private const MENU = [
        [
            'codsystem'=>'SSS',
            'logicalName'=>'definitions',
            'physicalName'=>'components/sss/index.js',
            'father'=>0,
            'son'=>0,
            'framework'=>'principal',
            'position'=>'1',
            'visible'=>1,
            'state'=>1,
            'read'=>1,
            'include'=>1,
            'change'=>1,
            'remove'=>1,
            'print'=>1,
            'administrative'=>1,
            'cancel'=>1,
            'run'=>1,
            'help'=>1,
            'undo'=>1,
            'sendMail'=>0,
            'download'=>0
        ]
    ];

    private const ARRAYCOUNTRIES= [
        [
            'codCountry'=> 'AF', 
            'name' => 'Afganistán'
        ],
        [
            'codCountry'=> 'AX', 
            'name' => 'Islas Gland'
        ],
        [
            'codCountry'=> 'AL', 
            'name' => 'Albania'
        ],
        [
            'codCountry'=> 'DE', 
            'name' => 'Alemania'
        ],
        [
            'codCountry'=> 'AD', 
            'name' => 'Andorra'
        ],
        [
            'codCountry'=> 'AO', 
            'name' => 'Angola'
        ],
        [
            'codCountry'=> 'AI', 
            'name' => 'Anguilla'
        ],
        [
            'codCountry'=> 'AQ', 
            'name' => 'Antártida'
        ],
        [
            'codCountry'=> 'AG', 
            'name' => 'Antigua y Barbuda'
        ],
        [
            'codCountry'=> 'AN', 
            'name' => 'Antillas Holandesas'
        ],
        [
            'codCountry'=> 'SA', 
            'name' => 'Arabia Saudí'
        ],
        [
            'codCountry'=> 'DZ', 
            'name' => 'Argelia'
        ],
        [
            'codCountry'=> 'AR', 
            'name' => 'Argentina'
        ],
        [
            'codCountry'=> 'AM', 
            'name' => 'Armenia'
        ],
        [
            'codCountry'=> 'AW', 
            'name' => 'Aruba'
        ],
        [
            'codCountry'=> 'AU', 
            'name' => 'Australia'
        ],
        [
            'codCountry'=> 'AT', 
            'name' => 'Austria'
        ],
        [
            'codCountry'=> 'AZ', 
            'name' => 'Azerbaiyán'
        ],
        [
            'codCountry'=> 'BS', 
            'name' => 'Bahamas'
        ],
        [
            'codCountry'=> 'BH', 
            'name' => 'Bahréin'
        ],
        [
            'codCountry'=> 'BD', 
            'name' => 'Bangladesh'
        ],
        [
            'codCountry'=> 'BB', 
            'name' => 'Barbados'
        ],
        [
            'codCountry'=> 'BY', 
            'name' => 'Bielorrusia'
        ],
        [
            'codCountry'=> 'BE', 
            'name' => 'Bélgica'
        ],
        [
            'codCountry'=> 'BZ', 
            'name' => 'Belice'
        ],
        [
            'codCountry'=> 'BJ', 
            'name' => 'Benin'
        ],
        [
            'codCountry'=> 'BM', 
            'name' => 'Bermudas'
        ],
        [
            'codCountry'=> 'BT', 
            'name' => 'Bhután'
        ],
        [
            'codCountry'=> 'BO', 
            'name' => 'Bolivia'
        ],
        [
            'codCountry'=> 'BA', 
            'name' => 'Bosnia y Herzegovina'
        ],
        [
            'codCountry'=> 'BW', 
            'name' => 'Botsuana'
        ],
        [
            'codCountry'=> 'BV', 
            'name' => 'Isla Bouvet'
        ],
        [
            'codCountry'=> 'BR', 
            'name' => 'Brasil'
        ],
        [
            'codCountry'=> 'BN', 
            'name' => 'Brunéi'
        ],
        [
            'codCountry'=> 'BG', 
            'name' => 'Bulgaria'
        ],
        [
            'codCountry'=> 'BF', 
            'name' => 'Burkina Faso'
        ],
        [
            'codCountry'=> 'BI', 
            'name' => 'Burundi'
        ],
        [
            'codCountry'=> 'CV', 
            'name' => 'Cabo Verde'
        ],
        [
            'codCountry'=> 'KY', 
            'name' => 'Islas Caimán'
        ],
        [
            'codCountry'=> 'KH', 
            'name' => 'Camboya'
        ],
        [
            'codCountry'=> 'CM', 
            'name' => 'Camerún'
        ],
        [
            'codCountry'=> 'CA', 
            'name' => 'Canadá'
        ],
        [
            'codCountry'=> 'CF', 
            'name' => 'República Centroafricana'
        ],
        [
            'codCountry'=> 'TD', 
            'name' => 'Chad'
        ],
        [
            'codCountry'=> 'CZ', 
            'name' => 'República Checa'
        ],
        [
            'codCountry'=> 'CL', 
            'name' => 'Chile'
        ],
        [
            'codCountry'=> 'CN', 
            'name' => 'China'
        ],
        [
            'codCountry'=> 'CY', 
            'name' => 'Chipre'
        ],
        [
            'codCountry'=> 'CX', 
            'name' => 'Isla de Navidad'
        ],
        [
            'codCountry'=> 'VA', 
            'name' => 'Ciudad del Vaticano'
        ],
        [
            'codCountry'=> 'CC', 
            'name' => 'Islas Cocos'
        ],
        [
            'codCountry'=> 'CO', 
            'name' => 'Colombia'
        ],
        [
            'codCountry'=> 'KM', 
            'name' => 'Comoras'
        ],
        [
            'codCountry'=> 'CD', 
            'name' => 'República Democrática del Congo'
        ],
        [
            'codCountry'=> 'CG', 
            'name' => 'Congo'
        ],
        [
            'codCountry'=> 'CK', 
            'name' => 'Islas Cook'
        ],
        [
            'codCountry'=> 'KP', 
            'name' => 'Corea del Norte'
        ],
        [
            'codCountry'=> 'KR', 
            'name' => 'Corea del Sur'
        ],
        [
            'codCountry'=> 'CI', 
            'name' => 'Costa de Marfil'
        ],
        [
            'codCountry'=> 'CR', 
            'name' => 'Costa Rica'
        ],
        [
            'codCountry'=> 'HR', 
            'name' => 'Croacia'
        ],
        [
            'codCountry'=> 'CU', 
            'name' => 'Cuba'
        ],
        [
            'codCountry'=> 'DK', 
            'name' => 'Dinamarca'
        ],
        [
            'codCountry'=> 'DM', 
            'name' => 'Dominica'
        ],
        [
            'codCountry'=> 'DO', 
            'name' => 'República Dominicana'
        ],
        [
            'codCountry'=> 'EC', 
            'name' => 'Ecuador'
        ],
        [
            'codCountry'=> 'EG', 
            'name' => 'Egipto'
        ],
        [
            'codCountry'=> 'SV', 
            'name' => 'El Salvador'
        ],
        [
            'codCountry'=> 'AE', 
            'name' => 'Emiratos Árabes Unidos'
        ],
        [
            'codCountry'=> 'ER', 
            'name' => 'Eritrea'
        ],
        [
            'codCountry'=> 'SK', 
            'name' => 'Eslovaquia'
        ],
        [
            'codCountry'=> 'SI', 
            'name' => 'Eslovenia'
        ],
        [
            'codCountry'=> 'ES', 
            'name' => 'España'
        ],
        [
            'codCountry'=> 'UM', 
            'name' => 'Islas ultramarinas de Estados Unidos'
        ],
        [
            'codCountry'=> 'US', 
            'name' => 'Estados Unidos'
        ],
        [
            'codCountry'=> 'EE', 
            'name' => 'Estonia'
        ],
        [
            'codCountry'=> 'ET', 
            'name' => 'Etiopía'
        ],
        [
            'codCountry'=> 'FO', 
            'name' => 'Islas Feroe'
        ],
        [
            'codCountry'=> 'PH', 
            'name' => 'Filipinas'
        ],
        [
            'codCountry'=> 'FI', 
            'name' => 'Finlandia'
        ],
        [
            'codCountry'=> 'FJ', 
            'name' => 'Fiyi'
        ],
        [
            'codCountry'=> 'FR', 
            'name' => 'Francia'
        ],
        [
            'codCountry'=> 'GA', 
            'name' => 'Gabón'
        ],
        [
            'codCountry'=> 'GM', 
            'name' => 'Gambia'
        ],
        [
            'codCountry'=> 'GE', 
            'name' => 'Georgia'
        ],
        [
            'codCountry'=> 'GS', 
            'name' => 'Islas Georgias del Sur y Sandwich del Sur'
        ],
        [
            'codCountry'=> 'GH', 
            'name' => 'Ghana'
        ],
        [
            'codCountry'=> 'GI', 
            'name' => 'Gibraltar'
        ],
        [
            'codCountry'=> 'GD', 
            'name' => 'Granada'
        ],
        [
            'codCountry'=> 'GR', 
            'name' => 'Grecia'
        ],
        [
            'codCountry'=> 'GL', 
            'name' => 'Groenlandia'
        ],
        [
            'codCountry'=> 'GP', 
            'name' => 'Guadalupe'
        ],
        [
            'codCountry'=> 'GU', 
            'name' => 'Guam'
        ],
        [
            'codCountry'=> 'GT', 
            'name' => 'Guatemala'
        ],
        [
            'codCountry'=> 'GF', 
            'name' => 'Guayana Francesa'
        ],
        [
            'codCountry'=> 'GN', 
            'name' => 'Guinea'
        ],
        [
            'codCountry'=> 'GQ', 
            'name' => 'Guinea Ecuatorial'
        ],
        [
            'codCountry'=> 'GW', 
            'name' => 'Guinea-Bissau'
        ],
        [
            'codCountry'=> 'GY', 
            'name' => 'Guyana'
        ],
        [
            'codCountry'=> 'HT', 
            'name' => 'Haití'
        ],
        [
            'codCountry'=> 'HM', 
            'name' => 'Islas Heard y McDonald'
        ],
        [
            'codCountry'=> 'HN', 
            'name' => 'Honduras'
        ],
        [
            'codCountry'=> 'HK', 
            'name' => 'Hong Kong'
        ],
        [
            'codCountry'=> 'HU', 
            'name' => 'Hungría'
        ],
        [
            'codCountry'=> 'IN', 
            'name' => 'India'
        ],
        [
            'codCountry'=> 'ID', 
            'name' => 'Indonesia'
        ],
        [
            'codCountry'=> 'IR', 
            'name' => 'Irán'
        ],
        [
            'codCountry'=> 'IQ', 
            'name' => 'Iraq'
        ],
        [
            'codCountry'=> 'IE', 
            'name' => 'Irlanda'
        ],
        [
            'codCountry'=> 'IS', 
            'name' => 'Islandia'
        ],
        [
            'codCountry'=> 'IL', 
            'name' => 'Israel'
        ],
        [
            'codCountry'=> 'IT', 
            'name' => 'Italia'
        ],
        [
            'codCountry'=> 'JM', 
            'name' => 'Jamaica'
        ],
        [
            'codCountry'=> 'JP', 
            'name' => 'Japón'
        ],
        [
            'codCountry'=> 'JO', 
            'name' => 'Jordania'
        ],
        [
            'codCountry'=> 'KZ', 
            'name' => 'Kazajstán'
        ],
        [
            'codCountry'=> 'KE', 
            'name' => 'Kenia'
        ],
        [
            'codCountry'=> 'KG', 
            'name' => 'Kirguistán'
        ],
        [
            'codCountry'=> 'KI', 
            'name' => 'Kiribati'
        ],
        [
            'codCountry'=> 'KW', 
            'name' => 'Kuwait'
        ],
        [
            'codCountry'=> 'LA', 
            'name' => 'Laos'
        ],
        [
            'codCountry'=> 'LS', 
            'name' => 'Lesotho'
        ],
        [
            'codCountry'=> 'LV', 
            'name' => 'Letonia'
        ],
        [
            'codCountry'=> 'LB', 
            'name' => 'Líbano'
        ],
        [
            'codCountry'=> 'LR', 
            'name' => 'Liberia'
        ],
        [
            'codCountry'=> 'LY', 
            'name' => 'Libia'
        ],
        [
            'codCountry'=> 'LI', 
            'name' => 'Liechtenstein'
        ],
        [
            'codCountry'=> 'LT', 
            'name' => 'Lituania'
        ],
        [
            'codCountry'=> 'LU', 
            'name' => 'Luxemburgo'
        ],
        [
            'codCountry'=> 'MO', 
            'name' => 'Macao'
        ],
        [
            'codCountry'=> 'MK', 
            'name' => 'ARY Macedonia'
        ],
        [
            'codCountry'=> 'MG', 
            'name' => 'Madagascar'
        ],
        [
            'codCountry'=> 'MY', 
            'name' => 'Malasia'
        ],
        [
            'codCountry'=> 'MW', 
            'name' => 'Malawi'
        ],
        [
            'codCountry'=> 'MV', 
            'name' => 'Maldivas'
        ],
        [
            'codCountry'=> 'ML', 
            'name' => 'Malí'
        ],
        [
            'codCountry'=> 'MT', 
            'name' => 'Malta'
        ],
        [
            'codCountry'=> 'FK', 
            'name' => 'Islas Malvinas'
        ],
        [
            'codCountry'=> 'MP', 
            'name' => 'Islas Marianas del Norte'
        ],
        [
            'codCountry'=> 'MA', 
            'name' => 'Marruecos'
        ],
        [
            'codCountry'=> 'MH', 
            'name' => 'Islas Marshall'
        ],
        [
            'codCountry'=> 'MQ', 
            'name' => 'Martinica'
        ],
        [
            'codCountry'=> 'MU', 
            'name' => 'Mauricio'
        ],
        [
            'codCountry'=> 'MR', 
            'name' => 'Mauritania'
        ],
        [
            'codCountry'=> 'YT', 
            'name' => 'Mayotte'
        ],
        [
            'codCountry'=> 'MX', 
            'name' => 'México'
        ],
        [
            'codCountry'=> 'FM', 
            'name' => 'Micronesia'
        ],
        [
            'codCountry'=> 'MD', 
            'name' => 'Moldavia'
        ],
        [
            'codCountry'=> 'MC', 
            'name' => 'Mónaco'
        ],
        [
            'codCountry'=> 'MN', 
            'name' => 'Mongolia'
        ],
        [
            'codCountry'=> 'MS', 
            'name' => 'Montserrat'
        ],
        [
            'codCountry'=> 'MZ', 
            'name' => 'Mozambique'
        ],
        [
            'codCountry'=> 'MM', 
            'name' => 'Myanmar'
        ],
        [
            'codCountry'=> 'NA', 
            'name' => 'Namibia'
        ],
        [
            'codCountry'=> 'NR', 
            'name' => 'Nauru'
        ],
        [
            'codCountry'=> 'NP', 
            'name' => 'Nepal'
        ],
        [
            'codCountry'=> 'NI', 
            'name' => 'Nicaragua'
        ],
        [
            'codCountry'=> 'NE', 
            'name' => 'Níger'
        ],
        [
            'codCountry'=> 'NG', 
            'name' => 'Nigeria'
        ],
        [
            'codCountry'=> 'NU', 
            'name' => 'Niue'
        ],
        [
            'codCountry'=> 'NF', 
            'name' => 'Isla Norfolk'
        ],
        [
            'codCountry'=> 'NO', 
            'name' => 'Noruega'
        ],
        [
            'codCountry'=> 'NC', 
            'name' => 'Nueva Caledonia'
        ],
        [
            'codCountry'=> 'NZ', 
            'name' => 'Nueva Zelanda'
        ],
        [
            'codCountry'=> 'OM', 
            'name' => 'Omán'
        ],
        [
            'codCountry'=> 'NL', 
            'name' => 'Países Bajos'
        ],
        [
            'codCountry'=> 'PK', 
            'name' => 'Pakistán'
        ],
        [
            'codCountry'=> 'PW', 
            'name' => 'Palau'
        ],
        [
            'codCountry'=> 'PS', 
            'name' => 'Palestina'
        ],
        [
            'codCountry'=> 'PA', 
            'name' => 'Panamá'
        ],
        [
            'codCountry'=> 'PG', 
            'name' => 'Papúa Nueva Guinea'
        ],
        [
            'codCountry'=> 'PY', 
            'name' => 'Paraguay'
        ],
        [
            'codCountry'=> 'PE', 
            'name' => 'Perú'
        ],
        [
            'codCountry'=> 'PN', 
            'name' => 'Islas Pitcairn'
        ],
        [
            'codCountry'=> 'PF', 
            'name' => 'Polinesia Francesa'
        ],
        [
            'codCountry'=> 'PL', 
            'name' => 'Polonia'
        ],
        [
            'codCountry'=> 'PT', 
            'name' => 'Portugal'
        ],
        [
            'codCountry'=> 'PR', 
            'name' => 'Puerto Rico'
        ],
        [
            'codCountry'=> 'QA', 
            'name' => 'Qatar'
        ],
        [
            'codCountry'=> 'GB', 
            'name' => 'Reino Unido'
        ],
        [
            'codCountry'=> 'RE', 
            'name' => 'Reunión'
        ],
        [
            'codCountry'=> 'RW', 
            'name' => 'Ruanda'
        ],
        [
            'codCountry'=> 'RO', 
            'name' => 'Rumania'
        ],
        [
            'codCountry'=> 'RU', 
            'name' => 'Rusia'
        ],
        [
            'codCountry'=> 'EH', 
            'name' => 'Sahara Occidental'
        ],
        [
            'codCountry'=> 'SB', 
            'name' => 'Islas Salomón'
        ],
        [
            'codCountry'=> 'WS', 
            'name' => 'Samoa'
        ],
        [
            'codCountry'=> 'AS', 
            'name' => 'Samoa Americana'
        ],
        [
            'codCountry'=> 'KN', 
            'name' => 'San Cristóbal y Nevis'
        ],
        [
            'codCountry'=> 'SM', 
            'name' => 'San Marino'
        ],
        [
            'codCountry'=> 'PM', 
            'name' => 'San Pedro y Miquelón'
        ],
        [
            'codCountry'=> 'VC', 
            'name' => 'San Vicente y las Granadinas'
        ],
        [
            'codCountry'=> 'SH', 
            'name' => 'Santa Helena'
        ],
        [
            'codCountry'=> 'LC', 
            'name' => 'Santa Lucía'
        ],
        [
            'codCountry'=> 'ST', 
            'name' => 'Santo Tomé y Príncipe'
        ],
        [
            'codCountry'=> 'SN', 
            'name' => 'Senegal'
        ],
        [
            'codCountry'=> 'CS', 
            'name' => 'Serbia y Montenegro'
        ],
        [
            'codCountry'=> 'SC', 
            'name' => 'Seychelles'
        ],
        [
            'codCountry'=> 'SL', 
            'name' => 'Sierra Leona'
        ],
        [
            'codCountry'=> 'SG', 
            'name' => 'Singapur'
        ],
        [
            'codCountry'=> 'SY', 
            'name' => 'Siria'
        ],
        [
            'codCountry'=> 'SO', 
            'name' => 'Somalia'
        ],
        [
            'codCountry'=> 'LK', 
            'name' => 'Sri Lanka'
        ],
        [
            'codCountry'=> 'SZ', 
            'name' => 'Suazilandia'
        ],
        [
            'codCountry'=> 'ZA', 
            'name' => 'Sudáfrica'
        ],
        [
            'codCountry'=> 'SD', 
            'name' => 'Sudán'
        ],
        [
            'codCountry'=> 'SE', 
            'name' => 'Suecia'
        ],
        [
            'codCountry'=> 'CH', 
            'name' => 'Suiza'
        ],
        [
            'codCountry'=> 'SR', 
            'name' => 'Surinam'
        ],
        [
            'codCountry'=> 'SJ', 
            'name' => 'Svalbard y Jan Mayen'
        ],
        [
            'codCountry'=> 'TH', 
            'name' => 'Tailandia'
        ],
        [
            'codCountry'=> 'TW', 
            'name' => 'Taiwán'
        ],
        [
            'codCountry'=> 'TZ', 
            'name' => 'Tanzania'
        ],
        [
            'codCountry'=> 'TJ', 
            'name' => 'Tayikistán'
        ],
        [
            'codCountry'=> 'IO', 
            'name' => 'Territorio Británico del Océano Índico'
        ],
        [
            'codCountry'=> 'TF', 
            'name' => 'Territorios Australes Franceses'
        ],
        [
            'codCountry'=> 'TL', 
            'name' => 'Timor Oriental'
        ],
        [
            'codCountry'=> 'TG', 
            'name' => 'Togo'
        ],
        [
            'codCountry'=> 'TK', 
            'name' => 'Tokelau'
        ],
        [
            'codCountry'=> 'TO', 
            'name' => 'Tonga'
        ],
        [
            'codCountry'=> 'TT', 
            'name' => 'Trinidad y Tobago'
        ],
        [
            'codCountry'=> 'TN', 
            'name' => 'Túnez'
        ],
        [
            'codCountry'=> 'TC', 
            'name' => 'Islas Turcas y Caicos'
        ],
        [
            'codCountry'=> 'TM', 
            'name' => 'Turkmenistán'
        ],
        [
            'codCountry'=> 'TR', 
            'name' => 'Turquía'
        ],
        [
            'codCountry'=> 'TV', 
            'name' => 'Tuvalu'
        ],
        [
            'codCountry'=> 'UA', 
            'name' => 'Ucrania'
        ],
        [
            'codCountry'=> 'UG', 
            'name' => 'Uganda'
        ],
        [
            'codCountry'=> 'UY', 
            'name' => 'Uruguay'
        ],
        [
            'codCountry'=> 'UZ', 
            'name' => 'Uzbekistán'
        ],
        [
            'codCountry'=> 'VU', 
            'name' => 'Vanuatu'
        ],
        [
            'codCountry'=> 'VE', 
            'name' => 'Venezuela'
        ],
        [
            'codCountry'=> 'VN', 
            'name' => 'Vietnam'
        ],
        [
            'codCountry'=> 'VG', 
            'name' => 'Islas Vírgenes Británicas'
        ],
        [
            'codCountry'=> 'VI', 
            'name' => 'Islas Vírgenes de los Estados Unidos'
        ],
        [
            'codCountry'=> 'WF', 
            'name' => 'Wallis y Futuna'
        ],
        [
            'codCountry'=> 'YE', 
            'name' => 'Yemen'
        ],
        [
            'codCountry'=> 'DJ', 
            'name' => 'Yibuti'
        ],
        [
            'codCountry'=> 'ZM', 
            'name' => 'Zambia'
        ],
        [
            'codCountry'=> 'ZW', 
            'name' => 'Zimbabue'
        ]
    ];

    
    private const EVENT = [
            [
                'event'=>'insert',
                'description'=>'include new register'
            ],
            [
                'event'=>'remove',
                'description'=>'remove a register'
            ],
            [
                'event'=>'update',
                'description'=>'update a register'
            ],
            [
                'event'=>'process',
                'description'=>'process a register'
            ],
            [
                'event'=>'report',
                'description'=>'print a report'
            ],
            [
                'event'=>'consult',
                'description'=>'consult a report'
            ]
        ];
     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $this->loadUsers($manager);
        $this->loadCountries($manager);
        $this->loadLevel($manager);
        $this->loadSuscription($manager);
        $this->loadEvent($manager);
        $this->loadSystem($manager);
        $this->loadPeriod($manager);
        //$this->loadCompany($manager);query manual
    }

    public function loadPeriod(ObjectManager $manager){
        $period = new ActivationPeriod();
        $period->setName('anual');
        $period->setNumberOfDays(365);
        $period->setBeenRemove(0);

    }

    

    public function loadSystem(ObjectManager $manager){

        foreach (self::SYSTEM as $key => $value) {
            $system = new System();
            
            $system->setName($value['name']);
            $system->setPosition($value['position']);
            $system->setState($value['state']);
            $system->setType($value['type']);
            $system->setAccess($value['access']);
            $system->setLocationFileImage($value['locationFileImage']);
            $system->setCodSystem($value['codsystem']);
            $system->setComponent($value['component']);

            $manager->persist($system);

                foreach (self::MENU as $ky => $val) {
                    $menu = new MenuWindowSystem();

                    if($value['codsystem'] == $val['codsystem']){
                        $menu->setSystem($system);
                        $menu->setLogicalName($val['logicalName']);
                        $menu->setPhysicalName($val['physicalName']);
                        $menu->setFather($val['father']);
                        $menu->setSon($val['son']);
                        $menu->setFramework($val['framework']);
                        $menu->setPosition($val['position']);
                        $menu->setVisible($val['visible']);
                        $menu->setState($val['state']);
                        $menu->setRead($val['read']);
                        $menu->setInclude($val['include']);
                        $menu->setChange($val['change']);
                        $menu->setRemove($val['remove']);
                        $menu->setPrint($val['print']);
                        $menu->setAdministrative($val['administrative']);
                        $menu->setCancel($val['cancel']);
                        $menu->setRun($val['run']);
                        $menu->setHelp($val['help']);
                        $menu->setUndo($val['undo']);
                        $menu->setSendMail($val['sendMail']);
                        $menu->setDownload($val['download']);
                        $menu->setCodSystem($val['codsystem']);

                        $manager->persist($menu);
                    }
                    
                    
                }

        }
        $manager->flush();
    }


    public function loadEvent(ObjectManager $manager){

        

        foreach (self::EVENT as $key => $value) {
            $event = new Event();
            $event->setEvent($value['event']);
            $event->setDescription($value['description']);
            $manager->persist($event);

        }
        $manager->flush();
    }

    public function loadSuscription(ObjectManager $manager){

        foreach (self::SUSCRIPTIONS as $key => $value) {
            $suscription = new Subscription();
            $suscription->setName($value['name']);
            $suscription->setBeenRemove($value['been_remove']);
            $manager->persist($suscription);
        }
        $manager->flush();

    }
    public function loadLevel(ObjectManager $manager){
        foreach (self::LEVELS as $key => $value) {
            $level = new Level();
            $level->setName($value['name']);
            $level->setBeenRemove($value['been_remove']);
            $manager->persist($level);
        }
        $manager->flush();
    }

    public function loadCountries(ObjectManager $manager){

        foreach (self::ARRAYCOUNTRIES as $key => $value) {
            $country = new Country();
            $country->setCodCountry($value['codCountry']);
            $country->setName($value['name']);
            $manager->persist($country);

        }

        $manager->flush();


    }

    public function loadUsers(ObjectManager $manager)
    {
        foreach (self::USERS as $userFixture) {
            $user = new Users();
            $user->setEmail($userFixture['email']);

            $user->setPassword(
                $this->passwordEncoder->encodePassword(
                    $user,
                    $userFixture['password']
                )
            );
            $user->setRoles($userFixture['roles']);

            
            $this->addReference('user_'.$userFixture['username'], $user);

            $manager->persist($user);

            
        }

        $manager->flush();
    }
}
