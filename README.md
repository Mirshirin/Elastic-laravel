# Product Search with Elasticsearch and Laravel Scout

## Overview

This project demonstrates how to implement a fast and efficient product search functionality using Elasticsearch and Laravel Scout. It provides a scalable solution for indexing and searching products quickly, even with large datasets.

## Features

- Real-time product indexing using Laravel Scout
- Powerful full-text search capabilities with Elasticsearch
- Faceted search for filtering results
- Pagination support
- Customizable search query parameters

## Installation

To get started, follow these steps:

1. Clone the repository:
2. Install dependencies:

3. Set up Elasticsearch:
   - Ensure you have Elasticsearch installed and running on your system
   - Update the `.env` file with your Elasticsearch connection details:

4. Run migrations:

5. Seed the database with sample data:

6. Build the application assets:
7.npm run dev


8. Start the development server:
9. php artisan serve


## Usage

### Searching Products

You can search for products using the `/search` route. For example:


This will return a paginated list of matching products along with faceted filters.

### Adding New Products

To add new products to the index, use the `scout:import` Artisan command:

## Configuration

You can customize the search behavior by modifying the `config/scout.php` file. Some key options include:

- `index`: The name of the Elasticsearch index
- `model`: The model to be indexed
- `columns`: Which columns to index
- `limit`: Maximum number of documents per batch during import

## Contributing

Contributions are welcome! Please feel free to submit pull requests or issues.

## License

This project is open-source and released under the MIT License.

## Acknowledgments

- [Laravel Scout](https://laravel.com/docs/scout)
- [Elasticsearch PHP Client](https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/)
This README provides a good starting point for your project. You may want to customize it further based on your specific needs and any additional features or considerations unique to your project.
