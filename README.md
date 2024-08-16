This application is backend program that built using PHP as the programming language and using Laravel Framework. For database management this app using MySQL and also implements JWT Security for user authentication and generating token.

Developed by : Nabila Suci Syabani - Batch #17 Offline Jakarta

### AUTHENTICATION

#### REGISTER

```http
  POST /register
```

##### INPUT

```json
{
    "email": "tokoweb@gmail.com",
    "password": "tokoweb"
}
```

##### OUTPUT

![alt text](image.png)

#### LOGIN

```http
  POST /api/todo/auth/login
```

##### INPUT

```json
{
    "username": "admin1",
    "password": "admin#1234"
}
```

##### OUTPUT

![alt text](image-1.png)

### CATEGORY

#### CREATE CATEGORY (AUTHENTICATED)

```http
  POST /category-products
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

```json
{
    "name": "Furniture"
}
```

##### OUTPUT

![alt text](image-3.png)

#### GETALL CATEGORY (AUTHENTICATED)

```http
  GET /category-products
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

##### OUTPUT

![alt text](image-4.png)
![alt text](image-5.png)

#### GET BY ID CATEGORY (AUTHENTICATED)

```http
  GET /category-products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

##### OUTPUT

![alt text](image-6.png)

#### UPDATE BY ID CATEGORY (AUTHENTICATED)

```http
  PUT /category-products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

```json
{
    "name": "Home Furniture"
}
```

##### OUTPUT

![alt text](image-7.png)

#### DELETE BY ID CATEGORY (AUTHENTICATED)

```http
  DELETE /category-products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

##### OUTPUT

![alt text](image-15.png)

### PRODUCTS

#### CREATE PRODUCTS (AUTHENTICATED)

```http
  POST /products
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

```json
{
    "name": "Kursi",
    "price": 100000,
    "image": "kursi.jpg",
    "category_id": 8
}
```

##### OUTPUT

![alt text](image-8.png)

#### GETALL PRODUCTS (AUTHENTICATED)

```http
  GET /products
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

##### OUTPUT

![alt text](image-9.png)
![alt text](image-10.png)
![alt text](image-11.png)

#### GET BY ID PRODUCTS (AUTHENTICATED)

```http
  GET /products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

##### OUTPUT

![alt text](image-12.png)

#### UPDATE BY ID PRODUCTS (AUTHENTICATED)

```http
  PUT /products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

```json
{
    "name": "Meja",
    "price": 100000,
    "image": "meja.jpg",
    "category_id": 8
}
```

##### OUTPUT

![alt text](image-13.png)

#### DELETE BY ID CATEGORY (AUTHENTICATED)

```http
  DELETE /category-products/{id}
```

##### INPUT

```
Authorization (Add Login Token)
Type - Bearer Token
Token = {add token when login}
```

![alt text](image-2.png)

##### OUTPUT

![alt text](image-14.png)
