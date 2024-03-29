import mysql.connector
import requests

#Create and use SQL DATABASE
pok_db = mysql.connector.connect(host="localhost",port=3308,user="bit_academy",password= "bit_academy")
pok_cursor = pok_db.cursor()
db_name = "PokemonData"
pok_cursor.execute(f"DROP DATABASE IF EXISTS {db_name}")
pok_cursor.execute(f"CREATE DATABASE {db_name}")
pok_cursor.execute(f"USE {db_name}")

# get JSON -objects, convert, extract info  and catch 'em all in a list
pokemons = []
base_url = "https://pokeapi.co/api/v2/pokemon/"
for pok in range(1,152):
    json_obj = requests.get(base_url+str(pok)).json()
    pokemon = (json_obj['name'],json_obj['id'],json_obj['weight'],json_obj['height'])
    pokemons.append(pokemon)

# and create new table 'pokemons' and fill with this list
sql_table_drop = "DROP TABLE IF EXISTS Pokemons"
sql_table_create = """CREATE TABLE Pokemons (naam VARCHAR(255) NOT NULL,
                                            id MEDIUMINT NOT NULL PRIMARY KEY,
                                            weight INT NOT NULL,
                                            height INT NOT NULL)"""

pok_cursor.execute(sql_table_drop)
pok_cursor.execute(sql_table_create)

sql_add_pokemon = "INSERT INTO Pokemons VALUES (%s,%s,%s,%s)"
pok_cursor.executemany(sql_add_pokemon,pokemons)
pok_db.commit()
if pok_cursor.rowcount == len(pokemons):
    print("Geslaagd!")
