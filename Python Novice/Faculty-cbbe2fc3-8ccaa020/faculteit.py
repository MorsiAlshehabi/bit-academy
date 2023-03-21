x = int(input("Van welk getal wil je de faculteit weten? "))
total = 1
for i in range(1, x + 1):
    total *= i
print("De faculteit van ", x, " is ", total)

#################### andere manier

def factorial(n):
    if n == 0:
        return 1
    return n * factorial(n-1)


number = input("Enter a number: ")

number = int(number)


result = factorial(number)
print("The factorial of", number, "is", result)
