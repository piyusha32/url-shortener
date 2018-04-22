# url-shortener
PHP URL Shortener shortens the Long URL

The idea behind this URL shortener is to short the long url to small random string of characters,this can be achieved by applying some PHP functions to the long URL. here the long URL string is converted to some four letter words called Key. similarly when the shortened URL is clicked, it should point to the original long URL page.

#File structure
index.php – The home page of Shortener,User provides long url

shorten.php – Gets the long URL from index.php and shrinks it

decoder.php – decodes the shortened URL and redirects to correct page


#Database structure
This is the database structure which we use to store the data.

ID field is a random 5 digit number

Url field contains the lengthy URL address

shorten_url field contains the key value corresponding to the unique id

Every time a URL is shortened,the url,key,a random number is inserted into the table.Vice versa if a shortened url is clicked the decode.php will fetch the corresponding url from the table using the unique key.