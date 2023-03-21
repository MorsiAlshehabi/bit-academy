import requests

try:
    number = str(input("Typ een getal: "))
except ValueError:
    print("ongeldige invoer! Try again")

url_path = "https://jsonplaceholder.typicode.com/todos/"
complete_url = url_path + number
req_response = requests.get(complete_url)

if req_response:
    response  = req_response.json()
    result = response['title']
    print(result)
