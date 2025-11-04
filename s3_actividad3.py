# Funciones del tipo orden primera classe
def suma(a, b):
    return a + b
def resta(a, b):
    return a - b
def multiplicacion(a, b):
    return a * b
def division(a, b):
    return a / b

# Funciones del tipo orden superior
def operacion(func, a, b):
    return func(a, b)

# Funciones del tipo anónimas
cuadrado = lambda x: x ** 2
cubo = lambda x: x ** 3

# Uso de las funciones
print("Operaciones básicas:")
print("3 + 5 =", operacion(suma, 3, 5))
print("7 - 4 =", operacion(resta, 7, 4))
print("2 * 6 =", operacion(multiplicacion, 2, 6))
print("8 / 4 =", operacion(division, 8, 4))
print("\nOperaciones con funciones anónimas:")
print("El cuadrado de 4 es", cuadrado(4))
print("El cubo de 3 es", cubo(3))