# Superhero-System

A web application built with PHP and Tailwind CSS to search and display detailed information about superheroes. This project uses the Superhero API to fetch data about various superheroes. 

Features
    • Search Superheroes: Search for superheroes by name.
    • View All Superheroes: View a paginated list of all available superheroes.
    • Compare Superheroes: Compare the attributes of two superheroes side-by-side.
    • Superhero Details: View detailed information about a selected superhero, including power stats with progress bars.

Installation
    1. Clone the repository:
        git clone https://github.com/yourusername/superhero-information-system.git
        cd superhero-information-system
    2. Set up the server:
        Ensure you have PHP and a web server like Apache or Nginx installed. You can use XAMPP or WAMP for a local development environment.
    3. Update the API key:
        Replace YOUR_API_KEY in the api.php file with your actual API key from Superhero API.
        function searchSuperhero($name){
            $url = "https://superheroapi.com/api/YOUR_API_KEY/search/" . urlencode($name);
            $response = file_get_contents($url);
            if($response === FALSE){
                return [];
            }
            $data = json_decode($response, true);
            return $data['results'] ?? [];
        }
        function getSuperheroById($id){
            $url = "https://superheroapi.com/api/YOUR_API_KEY/" . urlencode($id);
            $response = file_get_contents($url);
            if($response === FALSE){
                return [];
        }
        return json_decode($response, true) ?? [];
    }
    4. Run the application:
        Place the project folder in your web server's root directory (e.g., htdocs for XAMPP). Start the server and navigate to http://localhost/superhero-information-system in your browser.

Usage
    • Home Page: Start your search for superheroes.
    • Search Results: Displays the list of superheroes matching the search query.
    • Superhero Details: Click on a superhero's name in the search results to view detailed information, including their biography, appearance, work, connections, and power stats.