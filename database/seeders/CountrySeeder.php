<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['country_code' => 'AF', 'country_name' => 'Afghanistan', 'currency_name' => 'Afghani', 'currency_code' => 'AFN', 'currency_sign' => '؋', 'call' => 'Afghans'],
            ['country_code' => 'AL', 'country_name' => 'Albania', 'currency_name' => 'Lek', 'currency_code' => 'ALL', 'currency_sign' => 'L', 'call' => 'Albanians'],
            ['country_code' => 'DZ', 'country_name' => 'Algeria', 'currency_name' => 'Algerian Dinar', 'currency_code' => 'DZD', 'currency_sign' => 'د.ج', 'call' => 'Algerians'],
            ['country_code' => 'AD', 'country_name' => 'Andorra', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Andorrans'],
            ['country_code' => 'AO', 'country_name' => 'Angola', 'currency_name' => 'Kwanza', 'currency_code' => 'AOA', 'currency_sign' => 'Kz', 'call' => 'Angolans'],
            ['country_code' => 'AR', 'country_name' => 'Argentina', 'currency_name' => 'Peso', 'currency_code' => 'ARS', 'currency_sign' => '$', 'call' => 'Argentinians'],
            ['country_code' => 'AM', 'country_name' => 'Armenia', 'currency_name' => 'Dram', 'currency_code' => 'AMD', 'currency_sign' => 'դր', 'call' => 'Armenians'],
            ['country_code' => 'AU', 'country_name' => 'Australia', 'currency_name' => 'Dollar', 'currency_code' => 'AUD', 'currency_sign' => '$', 'call' => 'Australians'],
            ['country_code' => 'AT', 'country_name' => 'Austria', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Austrians'],
            ['country_code' => 'AZ', 'country_name' => 'Azerbaijan', 'currency_name' => 'Manat', 'currency_code' => 'AZN', 'currency_sign' => '₼', 'call' => 'Azerbaijanis'],
            ['country_code' => 'BH', 'country_name' => 'Bahrain', 'currency_name' => 'Dinar', 'currency_code' => 'BHD', 'currency_sign' => 'د.ب', 'call' => 'Bahrainis'],
            ['country_code' => 'BD', 'country_name' => 'Bangladesh', 'currency_name' => 'Taka', 'currency_code' => 'BDT', 'currency_sign' => '৳', 'call' => 'Bangladeshis'],
            ['country_code' => 'BB', 'country_name' => 'Barbados', 'currency_name' => 'Dollar', 'currency_code' => 'BBD', 'currency_sign' => '$', 'call' => 'Barbadians'],
            ['country_code' => 'BY', 'country_name' => 'Belarus', 'currency_name' => 'Belarusian Ruble', 'currency_code' => 'BYN', 'currency_sign' => 'Br', 'call' => 'Belarusians'],
            ['country_code' => 'BE', 'country_name' => 'Belgium', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Belgians'],
            ['country_code' => 'BZ', 'country_name' => 'Belize', 'currency_name' => 'Dollar', 'currency_code' => 'BZD', 'currency_sign' => '$', 'call' => 'Belizeans'],
            ['country_code' => 'BJ', 'country_name' => 'Benin', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Benians'],
            ['country_code' => 'BT', 'country_name' => 'Bhutan', 'currency_name' => 'Ngultrum', 'currency_code' => 'BTN', 'currency_sign' => 'Nu', 'call' => 'Bhutanes'],
            ['country_code' => 'BO', 'country_name' => 'Bolivia', 'currency_name' => 'Boliviano', 'currency_code' => 'BOB', 'currency_sign' => 'Bs.', 'call' => 'Bolivians'],
            ['country_code' => 'BA', 'country_name' => 'Bosnia and Herzegovina', 'currency_name' => 'Convertible Mark', 'currency_code' => 'BAM', 'currency_sign' => 'KM', 'call' => 'Bosnians'],
            ['country_code' => 'BW', 'country_name' => 'Botswana', 'currency_name' => 'Pula', 'currency_code' => 'BWP', 'currency_sign' => 'P', 'call' => 'Batswana'],
            ['country_code' => 'BR', 'country_name' => 'Brazil', 'currency_name' => 'Real', 'currency_code' => 'BRL', 'currency_sign' => 'R$', 'call' => 'Brazilians'],
            ['country_code' => 'BN', 'country_name' => 'Brunei', 'currency_name' => 'Dollar', 'currency_code' => 'BND', 'currency_sign' => '$', 'call' => 'Bruneians'],
            ['country_code' => 'BG', 'country_name' => 'Bulgaria', 'currency_name' => 'Lev', 'currency_code' => 'BGN', 'currency_sign' => 'лв', 'call' => 'Bulgarians'],
            ['country_code' => 'BF', 'country_name' => 'Burkina Faso', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Burkinabé'],
            ['country_code' => 'BI', 'country_name' => 'Burundi', 'currency_name' => 'Burundian Franc', 'currency_code' => 'BIF', 'currency_sign' => 'Fr', 'call' => 'Burundians'],
            ['country_code' => 'KH', 'country_name' => 'Cambodia', 'currency_name' => 'Riel', 'currency_code' => 'KHR', 'currency_sign' => '៛', 'call' => 'Cambodians'],
            ['country_code' => 'CM', 'country_name' => 'Cameroon', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Cameroonians'],
            ['country_code' => 'CA', 'country_name' => 'Canada', 'currency_name' => 'Dollar', 'currency_code' => 'CAD', 'currency_sign' => '$', 'call' => 'Canadians'],
            ['country_code' => 'CV', 'country_name' => 'Cape Verde', 'currency_name' => 'Escudo', 'currency_code' => 'CVE', 'currency_sign' => '$', 'call' => 'Cape Verdeans'],
            ['country_code' => 'CF', 'country_name' => 'Central African Republic', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Central Africans'],
            ['country_code' => 'TD', 'country_name' => 'Chad', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Chadians'],
            ['country_code' => 'CL', 'country_name' => 'Chile', 'currency_name' => 'Peso', 'currency_code' => 'CLP', 'currency_sign' => '$', 'call' => 'Chilenians'],
            ['country_code' => 'CN', 'country_name' => 'China', 'currency_name' => 'Yuan', 'currency_code' => 'CNY', 'currency_sign' => '¥', 'call' => 'Chinese'],
            ['country_code' => 'CO', 'country_name' => 'Colombia', 'currency_name' => 'Peso', 'currency_code' => 'COP', 'currency_sign' => '$', 'call' => 'Colombians'],
            ['country_code' => 'KM', 'country_name' => 'Comoros', 'currency_name' => 'Comorian Franc', 'currency_code' => 'KMF', 'currency_sign' => 'Fr', 'call' => 'Comorians'],
            ['country_code' => 'CG', 'country_name' => 'Congo, Republic of the', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Congolese'],
            ['country_code' => 'CD', 'country_name' => 'Congo, Democratic Republic of the', 'currency_name' => 'Congolese Franc', 'currency_code' => 'CDF', 'currency_sign' => 'Fr', 'call' => 'Congolese'],
            ['country_code' => 'CR', 'country_name' => 'Costa Rica', 'currency_name' => 'Colón', 'currency_code' => 'CRC', 'currency_sign' => '₡', 'call' => 'Costa Ricans'],
            ['country_code' => 'HR', 'country_name' => 'Croatia', 'currency_name' => 'Kuna', 'currency_code' => 'HRK', 'currency_sign' => 'kn', 'call' => 'Croatians'],
            ['country_code' => 'CU', 'country_name' => 'Cuba', 'currency_name' => 'Peso', 'currency_code' => 'CUP', 'currency_sign' => '$', 'call' => 'Cubans'],
            ['country_code' => 'CY', 'country_name' => 'Cyprus', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Cypriots'],
            ['country_code' => 'CZ', 'country_name' => 'Czech Republic', 'currency_name' => 'Koruna', 'currency_code' => 'CZK', 'currency_sign' => 'Kč', 'call' => 'Czechs'],
            ['country_code' => 'DK', 'country_name' => 'Denmark', 'currency_name' => 'Krone', 'currency_code' => 'DKK', 'currency_sign' => 'kr', 'call' => 'Danes'],
            ['country_code' => 'DJ', 'country_name' => 'Djibouti', 'currency_name' => 'Franc', 'currency_code' => 'DJF', 'currency_sign' => 'Fr', 'call' => 'Djiboutians'],
            ['country_code' => 'DM', 'country_name' => 'Dominica', 'currency_name' => 'East Caribbean Dollar', 'currency_code' => 'XCD', 'currency_sign' => '$', 'call' => 'Dominicans'],
            ['country_code' => 'DO', 'country_name' => 'Dominican Republic', 'currency_name' => 'Peso', 'currency_code' => 'DOP', 'currency_sign' => '$', 'call' => 'Dominicans'],
            ['country_code' => 'EC', 'country_name' => 'Ecuador', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Ecuadorians'],
            ['country_code' => 'EG', 'country_name' => 'Egypt', 'currency_name' => 'Pound', 'currency_code' => 'EGP', 'currency_sign' => '£', 'call' => 'Egyptians'],
            ['country_code' => 'SV', 'country_name' => 'El Salvador', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Salvadorans'],
            ['country_code' => 'GQ', 'country_name' => 'Equatorial Guinea', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Equatoguineans'],
            ['country_code' => 'ER', 'country_name' => 'Eritrea', 'currency_name' => 'Nakfa', 'currency_code' => 'ERN', 'currency_sign' => 'Nfk', 'call' => 'Eritreans'],
            ['country_code' => 'EE', 'country_name' => 'Estonia', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Estonians'],
            ['country_code' => 'ET', 'country_name' => 'Ethiopia', 'currency_name' => 'Birr', 'currency_code' => 'ETB', 'currency_sign' => 'Br', 'call' => 'Ethiopians'],
            ['country_code' => 'FJ', 'country_name' => 'Fiji', 'currency_name' => 'Dollar', 'currency_code' => 'FJD', 'currency_sign' => '$', 'call' => 'Fijians'],
            ['country_code' => 'FI', 'country_name' => 'Finland', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Finns'],
            ['country_code' => 'FR', 'country_name' => 'France', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'French'],
            ['country_code' => 'GF', 'country_name' => 'French Guiana', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'French Guianese'],
            ['country_code' => 'PF', 'country_name' => 'French Polynesia', 'currency_name' => 'Pacific Franc', 'currency_code' => 'XPF', 'currency_sign' => 'Fr', 'call' => 'French Polynesians'],
            ['country_code' => 'GA', 'country_name' => 'Gabon', 'currency_name' => 'Central African CFA Franc', 'currency_code' => 'XAF', 'currency_sign' => 'Fr', 'call' => 'Gabonese'],
            ['country_code' => 'GM', 'country_name' => 'Gambia', 'currency_name' => 'Dalasi', 'currency_code' => 'GMD', 'currency_sign' => 'D', 'call' => 'Gambians'],
            ['country_code' => 'GE', 'country_name' => 'Georgia', 'currency_name' => 'Lari', 'currency_code' => 'GEL', 'currency_sign' => '₾', 'call' => 'Georgians'],
            ['country_code' => 'DE', 'country_name' => 'Germany', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Germans'],
            ['country_code' => 'GH', 'country_name' => 'Ghana', 'currency_name' => 'Cedi', 'currency_code' => 'GHS', 'currency_sign' => '₵', 'call' => 'Ghanaians'],
            ['country_code' => 'GR', 'country_name' => 'Greece', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Greeks'],
            ['country_code' => 'GD', 'country_name' => 'Grenada', 'currency_name' => 'East Caribbean Dollar', 'currency_code' => 'XCD', 'currency_sign' => '$', 'call' => 'Grenadians'],
            ['country_code' => 'GU', 'country_name' => 'Guam', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Guamanians'],
            ['country_code' => 'GT', 'country_name' => 'Guatemala', 'currency_name' => 'Quetzal', 'currency_code' => 'GTQ', 'currency_sign' => 'Q', 'call' => 'Guatemalans'],
            ['country_code' => 'GN', 'country_name' => 'Guinea', 'currency_name' => 'Franc', 'currency_code' => 'GNF', 'currency_sign' => 'Fr', 'call' => 'Guineans'],
            ['country_code' => 'GW', 'country_name' => 'Guinea-Bissau', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Bissau-Guineans'],
            ['country_code' => 'GY', 'country_name' => 'Guyana', 'currency_name' => 'Dollar', 'currency_code' => 'GYD', 'currency_sign' => '$', 'call' => 'Guyanians'],
            ['country_code' => 'HT', 'country_name' => 'Haiti', 'currency_name' => 'Gourde', 'currency_code' => 'HTG', 'currency_sign' => 'G', 'call' => 'Haitians'],
            ['country_code' => 'HN', 'country_name' => 'Honduras', 'currency_name' => 'Lempira', 'currency_code' => 'HNL', 'currency_sign' => 'L', 'call' => 'Hondurans'],
            ['country_code' => 'HU', 'country_name' => 'Hungary', 'currency_name' => 'Forint', 'currency_code' => 'HUF', 'currency_sign' => 'Ft', 'call' => 'Hungarians'],
            ['country_code' => 'IS', 'country_name' => 'Iceland', 'currency_name' => 'Krona', 'currency_code' => 'ISK', 'currency_sign' => 'kr', 'call' => 'Icelanders'],
            ['country_code' => 'IN', 'country_name' => 'India', 'currency_name' => 'Rupee', 'currency_code' => 'INR', 'currency_sign' => '₹', 'call' => 'Indians'],
            ['country_code' => 'ID', 'country_name' => 'Indonesia', 'currency_name' => 'Rupiah', 'currency_code' => 'IDR', 'currency_sign' => 'Rp', 'call' => 'Indonesians'],
            ['country_code' => 'IR', 'country_name' => 'Iran', 'currency_name' => 'Rial', 'currency_code' => 'IRR', 'currency_sign' => '﷼', 'call' => 'Iranians'],
            ['country_code' => 'IQ', 'country_name' => 'Iraq', 'currency_name' => 'Dinar', 'currency_code' => 'IQD', 'currency_sign' => 'د.ع', 'call' => 'Iraqis'],
            ['country_code' => 'IE', 'country_name' => 'Ireland', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Irish'],
            ['country_code' => 'IL', 'country_name' => 'Israel', 'currency_name' => 'New Shekel', 'currency_code' => 'ILS', 'currency_sign' => '₪', 'call' => 'Israelis'],
            ['country_code' => 'IT', 'country_name' => 'Italy', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Italians'],
            ['country_code' => 'CI', 'country_name' => 'Ivory Coast', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Ivorians'],
            ['country_code' => 'JM', 'country_name' => 'Jamaica', 'currency_name' => 'Dollar', 'currency_code' => 'JMD', 'currency_sign' => '$', 'call' => 'Jamaicans'],
            ['country_code' => 'JP', 'country_name' => 'Japan', 'currency_name' => 'Yen', 'currency_code' => 'JPY', 'currency_sign' => '¥', 'call' => 'Japanese'],
            ['country_code' => 'JO', 'country_name' => 'Jordan', 'currency_name' => 'Dinar', 'currency_code' => 'JOD', 'currency_sign' => 'د.أ', 'call' => 'Jordanians'],
            ['country_code' => 'KZ', 'country_name' => 'Kazakhstan', 'currency_name' => 'Tenge', 'currency_code' => 'KZT', 'currency_sign' => '₸', 'call' => 'Kazakhs'],
            ['country_code' => 'KE', 'country_name' => 'Kenya', 'currency_name' => 'Shilling', 'currency_code' => 'KES', 'currency_sign' => 'KSh', 'call' => 'Kenyans'],
            ['country_code' => 'KI', 'country_name' => 'Kiribati', 'currency_name' => 'Dollar', 'currency_code' => 'AUD', 'currency_sign' => '$', 'call' => 'Kiribatians'],
            ['country_code' => 'KR', 'country_name' => 'South Korea', 'currency_name' => 'Won', 'currency_code' => 'KRW', 'currency_sign' => '₩', 'call' => 'Koreans'],
            ['country_code' => 'KP', 'country_name' => 'North Korea', 'currency_name' => 'Won', 'currency_code' => 'KPW', 'currency_sign' => '₩', 'call' => 'North Koreans'],
            ['country_code' => 'KW', 'country_name' => 'Kuwait', 'currency_name' => 'Dinar', 'currency_code' => 'KWD', 'currency_sign' => 'د.ك', 'call' => 'Kuwaitis'],
            ['country_code' => 'KG', 'country_name' => 'Kyrgyzstan', 'currency_name' => 'Som', 'currency_code' => 'KGS', 'currency_sign' => 'с', 'call' => 'Kyrgyzstanians'],
            ['country_code' => 'LA', 'country_name' => 'Laos', 'currency_name' => 'Kip', 'currency_code' => 'LAK', 'currency_sign' => '₭', 'call' => 'Laotians'],
            ['country_code' => 'LV', 'country_name' => 'Latvia', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Latvians'],
            ['country_code' => 'LB', 'country_name' => 'Lebanon', 'currency_name' => 'Pound', 'currency_code' => 'LBP', 'currency_sign' => 'ل.ل', 'call' => 'Lebanese'],
            ['country_code' => 'LS', 'country_name' => 'Lesotho', 'currency_name' => 'Loti', 'currency_code' => 'LSL', 'currency_sign' => 'L', 'call' => 'Basotho'],
            ['country_code' => 'LR', 'country_name' => 'Liberia', 'currency_name' => 'Dollar', 'currency_code' => 'LRD', 'currency_sign' => '$', 'call' => 'Liberians'],
            ['country_code' => 'LY', 'country_name' => 'Libya', 'currency_name' => 'Dinar', 'currency_code' => 'LYD', 'currency_sign' => 'د.ل', 'call' => 'Libyans'],
            ['country_code' => 'LI', 'country_name' => 'Liechtenstein', 'currency_name' => 'Swiss Franc', 'currency_code' => 'CHF', 'currency_sign' => 'CHF', 'call' => 'Liechtensteiners'],
            ['country_code' => 'LT', 'country_name' => 'Lithuania', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Lithuanians'],
            ['country_code' => 'LU', 'country_name' => 'Luxembourg', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Luxembourgers'],
            ['country_code' => 'MO', 'country_name' => 'Macau', 'currency_name' => 'Pataca', 'currency_code' => 'MOP', 'currency_sign' => 'MOP$', 'call' => 'Macanese'],
            ['country_code' => 'MK', 'country_name' => 'North Macedonia', 'currency_name' => 'Denar', 'currency_code' => 'MKD', 'currency_sign' => 'ден', 'call' => 'Macedonians'],
            ['country_code' => 'MG', 'country_name' => 'Madagascar', 'currency_name' => 'Ariary', 'currency_code' => 'MGA', 'currency_sign' => 'Ar', 'call' => 'Malagasy'],
            ['country_code' => 'MW', 'country_name' => 'Malawi', 'currency_name' => 'Kwacha', 'currency_code' => 'MWK', 'currency_sign' => 'K', 'call' => 'Malawians'],
            ['country_code' => 'MY', 'country_name' => 'Malaysia', 'currency_name' => 'Ringgit', 'currency_code' => 'MYR', 'currency_sign' => 'RM', 'call' => 'Malaysians'],
            ['country_code' => 'MV', 'country_name' => 'Maldives', 'currency_name' => 'Rufiyaa', 'currency_code' => 'MVR', 'currency_sign' => 'Rf', 'call' => 'Maldivians'],
            ['country_code' => 'ML', 'country_name' => 'Mali', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Malians'],
            ['country_code' => 'MT', 'country_name' => 'Malta', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Maltese'],
            ['country_code' => 'MH', 'country_name' => 'Marshall Islands', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Marshallese'],
            ['country_code' => 'MR', 'country_name' => 'Mauritania', 'currency_name' => 'Ouguiya', 'currency_code' => 'MRU', 'currency_sign' => 'UM', 'call' => 'Mauritanians'],
            ['country_code' => 'MU', 'country_name' => 'Mauritius', 'currency_name' => 'Rupee', 'currency_code' => 'MUR', 'currency_sign' => '₨', 'call' => 'Mauritians'],
            ['country_code' => 'MX', 'country_name' => 'Mexico', 'currency_name' => 'Peso', 'currency_code' => 'MXN', 'currency_sign' => '$', 'call' => 'Mexicans'],
            ['country_code' => 'FM', 'country_name' => 'Micronesia', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Micronesians'],
            ['country_code' => 'MD', 'country_name' => 'Moldova', 'currency_name' => 'Leu', 'currency_code' => 'MDL', 'currency_sign' => 'L', 'call' => 'Moldovans'],
            ['country_code' => 'MC', 'country_name' => 'Monaco', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Monégasques'],
            ['country_code' => 'MN', 'country_name' => 'Mongolia', 'currency_name' => 'Tugrik', 'currency_code' => 'MNT', 'currency_sign' => '₮', 'call' => 'Mongolians'],
            ['country_code' => 'ME', 'country_name' => 'Montenegro', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Montenegrins'],
            ['country_code' => 'MA', 'country_name' => 'Morocco', 'currency_name' => 'Dirham', 'currency_code' => 'MAD', 'currency_sign' => 'د.م.', 'call' => 'Moroccans'],
            ['country_code' => 'MZ', 'country_name' => 'Mozambique', 'currency_name' => 'Metical', 'currency_code' => 'MZN', 'currency_sign' => 'MT', 'call' => 'Mozambicans'],
            ['country_code' => 'MM', 'country_name' => 'Myanmar', 'currency_name' => 'Kyat', 'currency_code' => 'MMK', 'currency_sign' => 'Ks', 'call' => 'Burmese'],
            ['country_code' => 'NA', 'country_name' => 'Namibia', 'currency_name' => 'Dollar', 'currency_code' => 'NAD', 'currency_sign' => '$', 'call' => 'Namibians'],
            ['country_code' => 'NR', 'country_name' => 'Nauru', 'currency_name' => 'Dollar', 'currency_code' => 'AUD', 'currency_sign' => '$', 'call' => 'Nauruans'],
            ['country_code' => 'NP', 'country_name' => 'Nepal', 'currency_name' => 'Rupee', 'currency_code' => 'NPR', 'currency_sign' => 'Rs', 'call' => 'Nepalese'],
            ['country_code' => 'NL', 'country_name' => 'Netherlands', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Dutch'],
            ['country_code' => 'NC', 'country_name' => 'New Caledonia', 'currency_name' => 'Pacific Franc', 'currency_code' => 'XPF', 'currency_sign' => 'Fr', 'call' => 'New Caledonians'],
            ['country_code' => 'NZ', 'country_name' => 'New Zealand', 'currency_name' => 'Dollar', 'currency_code' => 'NZD', 'currency_sign' => '$', 'call' => 'New Zealanders'],
            ['country_code' => 'NI', 'country_name' => 'Nicaragua', 'currency_name' => 'Córdoba', 'currency_code' => 'NIO', 'currency_sign' => 'C$', 'call' => 'Nicaraguans'],
            ['country_code' => 'NE', 'country_name' => 'Niger', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Nigeriens'],
            ['country_code' => 'NG', 'country_name' => 'Nigeria', 'currency_name' => 'Naira', 'currency_code' => 'NGN', 'currency_sign' => '₦', 'call' => 'Nigerians'],
            ['country_code' => 'NU', 'country_name' => 'Niue', 'currency_name' => 'Dollar', 'currency_code' => 'NZD', 'currency_sign' => '$', 'call' => 'Niueans'],
            ['country_code' => 'NF', 'country_name' => 'Norfolk Island', 'currency_name' => 'Dollar', 'currency_code' => 'AUD', 'currency_sign' => '$', 'call' => 'Norfolk Islanders'],
            ['country_code' => 'MP', 'country_name' => 'Northern Mariana Islands', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Northern Mariana Islanders'],
            ['country_code' => 'NO', 'country_name' => 'Norway', 'currency_name' => 'Krone', 'currency_code' => 'NOK', 'currency_sign' => 'kr', 'call' => 'Norwegians'],
            ['country_code' => 'OM', 'country_name' => 'Oman', 'currency_name' => 'Rial', 'currency_code' => 'OMR', 'currency_sign' => 'ر.ع.', 'call' => 'Omanis'],
            ['country_code' => 'PK', 'country_name' => 'Pakistan', 'currency_name' => 'Rupee', 'currency_code' => 'PKR', 'currency_sign' => '₨', 'call' => 'Pakistanis'],
            ['country_code' => 'PW', 'country_name' => 'Palau', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Palauans'],
            ['country_code' => 'PA', 'country_name' => 'Panama', 'currency_name' => 'Balboa', 'currency_code' => 'PAB', 'currency_sign' => 'B/.', 'call' => 'Panamanians'],
            ['country_code' => 'PG', 'country_name' => 'Papua New Guinea', 'currency_name' => 'Kina', 'currency_code' => 'PGK', 'currency_sign' => 'K', 'call' => 'Papua New Guineans'],
            ['country_code' => 'PY', 'country_name' => 'Paraguay', 'currency_name' => 'Guarani', 'currency_code' => 'PYG', 'currency_sign' => '₲', 'call' => 'Paraguayans'],
            ['country_code' => 'PE', 'country_name' => 'Peru', 'currency_name' => 'Sol', 'currency_code' => 'PEN', 'currency_sign' => 'S/', 'call' => 'Peruvians'],
            ['country_code' => 'PH', 'country_name' => 'Philippines', 'currency_name' => 'Peso', 'currency_code' => 'PHP', 'currency_sign' => '₱', 'call' => 'Filipinos'],
            ['country_code' => 'PN', 'country_name' => 'Pitcairn Islands', 'currency_name' => 'New Zealand Dollar', 'currency_code' => 'NZD', 'currency_sign' => '$', 'call' => 'Pitcairn Islanders'],
            ['country_code' => 'PL', 'country_name' => 'Poland', 'currency_name' => 'Zloty', 'currency_code' => 'PLN', 'currency_sign' => 'zł', 'call' => 'Poles'],
            ['country_code' => 'PT', 'country_name' => 'Portugal', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Portuguese'],
            ['country_code' => 'PR', 'country_name' => 'Puerto Rico', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Puerto Ricans'],
            ['country_code' => 'QA', 'country_name' => 'Qatar', 'currency_name' => 'Rial', 'currency_code' => 'QAR', 'currency_sign' => 'ر.ق', 'call' => 'Qataris'],
            ['country_code' => 'RE', 'country_name' => 'Réunion', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Réunionese'],
            ['country_code' => 'RO', 'country_name' => 'Romania', 'currency_name' => 'Leu', 'currency_code' => 'RON', 'currency_sign' => 'lei', 'call' => 'Romanians'],
            ['country_code' => 'RU', 'country_name' => 'Russia', 'currency_name' => 'Ruble', 'currency_code' => 'RUB', 'currency_sign' => '₽', 'call' => 'Russians'],
            ['country_code' => 'RW', 'country_name' => 'Rwanda', 'currency_name' => 'Franc', 'currency_code' => 'RWF', 'currency_sign' => 'Fr', 'call' => 'Rwandans'],
            ['country_code' => 'BL', 'country_name' => 'Saint Barthélemy', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Saint Barthélemois'],
            ['country_code' => 'SH', 'country_name' => 'Saint Helena', 'currency_name' => 'Pound', 'currency_code' => 'SHP', 'currency_sign' => '£', 'call' => 'Saint Helenians'],
            ['country_code' => 'KN', 'country_name' => 'Saint Kitts and Nevis', 'currency_name' => 'East Caribbean Dollar', 'currency_code' => 'XCD', 'currency_sign' => '$', 'call' => 'Kittitians'],
            ['country_code' => 'LC', 'country_name' => 'Saint Lucia', 'currency_name' => 'East Caribbean Dollar', 'currency_code' => 'XCD', 'currency_sign' => '$', 'call' => 'Saint Lucians'],
            ['country_code' => 'MF', 'country_name' => 'Saint Martin', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Saint Martinois'],
            ['country_code' => 'PM', 'country_name' => 'Saint Pierre and Miquelon', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Saint-Pierrais'],
            ['country_code' => 'VC', 'country_name' => 'Saint Vincent and the Grenadines', 'currency_name' => 'East Caribbean Dollar', 'currency_code' => 'XCD', 'currency_sign' => '$', 'call' => 'Vincentians'],
            ['country_code' => 'WS', 'country_name' => 'Samoa', 'currency_name' => 'Tala', 'currency_code' => 'WST', 'currency_sign' => 'SAT', 'call' => 'Samoans'],
            ['country_code' => 'SM', 'country_name' => 'San Marino', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Sammarinese'],
            ['country_code' => 'ST', 'country_name' => 'Sao Tome and Principe', 'currency_name' => 'Dobra', 'currency_code' => 'STN', 'currency_sign' => 'Db', 'call' => 'Sao Tomeans'],
            ['country_code' => 'SA', 'country_name' => 'Saudi Arabia', 'currency_name' => 'Riyal', 'currency_code' => 'SAR', 'currency_sign' => 'ر.س', 'call' => 'Saudis'],
            ['country_code' => 'SN', 'country_name' => 'Senegal', 'currency_name' => 'Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Senegalese'],
            ['country_code' => 'RS', 'country_name' => 'Serbia', 'currency_name' => 'Dinar', 'currency_code' => 'RSD', 'currency_sign' => 'дин', 'call' => 'Serbians'],
            ['country_code' => 'SC', 'country_name' => 'Seychelles', 'currency_name' => 'Rupee', 'currency_code' => 'SCR', 'currency_sign' => '₨', 'call' => 'Seychellois'],
            ['country_code' => 'SL', 'country_name' => 'Sierra Leone', 'currency_name' => 'Leone', 'currency_code' => 'SLL', 'currency_sign' => 'Le', 'call' => 'Sierra Leoneans'],
            ['country_code' => 'SG', 'country_name' => 'Singapore', 'currency_name' => 'Dollar', 'currency_code' => 'SGD', 'currency_sign' => '$', 'call' => 'Singaporeans'],
            ['country_code' => 'SX', 'country_name' => 'Sint Maarten', 'currency_name' => 'Guilder', 'currency_code' => 'ANG', 'currency_sign' => 'ƒ', 'call' => 'Sint Maarteners'],
            ['country_code' => 'SK', 'country_name' => 'Slovakia', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Slovaks'],
            ['country_code' => 'SI', 'country_name' => 'Slovenia', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Slovenians'],
            ['country_code' => 'SB', 'country_name' => 'Solomon Islands', 'currency_name' => 'Dollar', 'currency_code' => 'SBD', 'currency_sign' => '$', 'call' => 'Solomon Islanders'],
            ['country_code' => 'SO', 'country_name' => 'Somalia', 'currency_name' => 'Shilling', 'currency_code' => 'SOS', 'currency_sign' => 'Sh', 'call' => 'Somalis'],
            ['country_code' => 'ZA', 'country_name' => 'South Africa', 'currency_name' => 'Rand', 'currency_code' => 'ZAR', 'currency_sign' => 'R', 'call' => 'South Africans'],
            ['country_code' => 'GS', 'country_name' => 'South Georgia and the South Sandwich Islands', 'currency_name' => 'Pound', 'currency_code' => 'GBP', 'currency_sign' => '£', 'call' => 'South Georgians'],
            ['country_code' => 'ES', 'country_name' => 'Spain', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Spaniards'],
            ['country_code' => 'LK', 'country_name' => 'Sri Lanka', 'currency_name' => 'Rupee', 'currency_code' => 'LKR', 'currency_sign' => 'Rs', 'call' => 'Sri Lankans'],
            ['country_code' => 'SD', 'country_name' => 'Sudan', 'currency_name' => 'Pound', 'currency_code' => 'SDG', 'currency_sign' => 'ج.س', 'call' => 'Sudanese'],
            ['country_code' => 'SR', 'country_name' => 'Suriname', 'currency_name' => 'Dollar', 'currency_code' => 'SRD', 'currency_sign' => '$', 'call' => 'Surinamese'],
            ['country_code' => 'SJ', 'country_name' => 'Svalbard and Jan Mayen', 'currency_name' => 'Krone', 'currency_code' => 'NOK', 'currency_sign' => 'kr', 'call' => 'Svalbardians'],
            ['country_code' => 'SZ', 'country_name' => 'Swaziland', 'currency_name' => 'Lilangeni', 'currency_code' => 'SZL', 'currency_sign' => 'E', 'call' => 'Swazis'],
            ['country_code' => 'SE', 'country_name' => 'Sweden', 'currency_name' => 'Krona', 'currency_code' => 'SEK', 'currency_sign' => 'kr', 'call' => 'Swedes'],
            ['country_code' => 'CH', 'country_name' => 'Switzerland', 'currency_name' => 'Swiss Franc', 'currency_code' => 'CHF', 'currency_sign' => 'CHF', 'call' => 'Swiss'],
            ['country_code' => 'SY', 'country_name' => 'Syria', 'currency_name' => 'Pound', 'currency_code' => 'SYP', 'currency_sign' => 'ل.س', 'call' => 'Syrians'],
            ['country_code' => 'TW', 'country_name' => 'Taiwan', 'currency_name' => 'New Taiwan Dollar', 'currency_code' => 'TWD', 'currency_sign' => 'NT$', 'call' => 'Taiwanese'],
            ['country_code' => 'TJ', 'country_name' => 'Tajikistan', 'currency_name' => 'Somoni', 'currency_code' => 'TJS', 'currency_sign' => 'SM', 'call' => 'Tajiks'],
            ['country_code' => 'TZ', 'country_name' => 'Tanzania', 'currency_name' => 'Shilling', 'currency_code' => 'TZS', 'currency_sign' => 'TSh', 'call' => 'Tanzanians'],
            ['country_code' => 'TH', 'country_name' => 'Thailand', 'currency_name' => 'Baht', 'currency_code' => 'THB', 'currency_sign' => '฿', 'call' => 'Thais'],
            ['country_code' => 'TL', 'country_name' => 'Timor-Leste', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Timorese'],
            ['country_code' => 'TG', 'country_name' => 'Togo', 'currency_name' => 'West African CFA Franc', 'currency_code' => 'XOF', 'currency_sign' => 'Fr', 'call' => 'Togolese'],
            ['country_code' => 'TK', 'country_name' => 'Tokelau', 'currency_name' => 'Dollar', 'currency_code' => 'NZD', 'currency_sign' => '$', 'call' => 'Tokelauans'],
            ['country_code' => 'TO', 'country_name' => 'Tonga', 'currency_name' => 'Paʻanga', 'currency_code' => 'TOP', 'currency_sign' => 'T$', 'call' => 'Tongans'],
            ['country_code' => 'TT', 'country_name' => 'Trinidad and Tobago', 'currency_name' => 'Dollar', 'currency_code' => 'TTD', 'currency_sign' => '$', 'call' => 'Trinidadians'],
            ['country_code' => 'TN', 'country_name' => 'Tunisia', 'currency_name' => 'Dinar', 'currency_code' => 'TND', 'currency_sign' => 'د.ت', 'call' => 'Tunisians'],
            ['country_code' => 'TR', 'country_name' => 'Turkey', 'currency_name' => 'Lira', 'currency_code' => 'TRY', 'currency_sign' => '₺', 'call' => 'Turks'],
            ['country_code' => 'TM', 'country_name' => 'Turkmenistan', 'currency_name' => 'Manat', 'currency_code' => 'TMT', 'currency_sign' => 'T', 'call' => 'Turkmen'],
            ['country_code' => 'TV', 'country_name' => 'Tuvalu', 'currency_name' => 'Dollar', 'currency_code' => 'AUD', 'currency_sign' => '$', 'call' => 'Tuvaluans'],
            ['country_code' => 'UG', 'country_name' => 'Uganda', 'currency_name' => 'Shilling', 'currency_code' => 'UGX', 'currency_sign' => 'USh', 'call' => 'Ugandans'],
            ['country_code' => 'UA', 'country_name' => 'Ukraine', 'currency_name' => 'Hryvnia', 'currency_code' => 'UAH', 'currency_sign' => '₴', 'call' => 'Ukrainians'],
            ['country_code' => 'AE', 'country_name' => 'United Arab Emirates', 'currency_name' => 'Dirham', 'currency_code' => 'AED', 'currency_sign' => 'د.إ', 'call' => 'Emiratis'],
            ['country_code' => 'GB', 'country_name' => 'United Kingdom', 'currency_name' => 'Pound', 'currency_code' => 'GBP', 'currency_sign' => '£', 'call' => 'British'],
            ['country_code' => 'US', 'country_name' => 'United States', 'currency_name' => 'Dollar', 'currency_code' => 'USD', 'currency_sign' => '$', 'call' => 'Americans'],
            ['country_code' => 'UY', 'country_name' => 'Uruguay', 'currency_name' => 'Peso', 'currency_code' => 'UYU', 'currency_sign' => '$', 'call' => 'Uruguayans'],
            ['country_code' => 'UZ', 'country_name' => 'Uzbekistan', 'currency_name' => 'Som', 'currency_code' => 'UZS', 'currency_sign' => 'soʻm', 'call' => 'Uzbeks'],
            ['country_code' => 'VU', 'country_name' => 'Vanuatu', 'currency_name' => 'Vatu', 'currency_code' => 'VUV', 'currency_sign' => 'Vt', 'call' => 'Vanuatuans'],
            ['country_code' => 'VA', 'country_name' => 'Vatican City', 'currency_name' => 'Euro', 'currency_code' => 'EUR', 'currency_sign' => '€', 'call' => 'Vaticans'],
            ['country_code' => 'VE', 'country_name' => 'Venezuela', 'currency_name' => 'Bolívar', 'currency_code' => 'VES', 'currency_sign' => 'Bs', 'call' => 'Venezuelans'],
            ['country_code' => 'VN', 'country_name' => 'Vietnam', 'currency_name' => 'Dong', 'currency_code' => 'VND', 'currency_sign' => '₫', 'call' => 'Vietnames'],
            ['country_code' => 'WF', 'country_name' => 'Wallis and Futuna', 'currency_name' => 'Pacific Franc', 'currency_code' => 'XPF', 'currency_sign' => 'Fr', 'call' => 'Wallisians'],
            ['country_code' => 'YE', 'country_name' => 'Yemen', 'currency_name' => 'Rial', 'currency_code' => 'YER', 'currency_sign' => 'ر.ي', 'call' => 'Yemenis'],
            ['country_code' => 'ZM', 'country_name' => 'Zambia', 'currency_name' => 'Kwacha', 'currency_code' => 'ZMW', 'currency_sign' => 'ZK', 'call' => 'Zambians'],
            ['country_code' => 'ZW', 'country_name' => 'Zimbabwe', 'currency_name' => 'Dollar', 'currency_code' => 'ZWL', 'currency_sign' => '$', 'call' => 'Zimbabweans']
        ];

        DB::table('countries')->insert($countries);
    }
}
