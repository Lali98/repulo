from eltolas import *
import string

betuk = string.ascii_letters
print(betuk)

e_m = []

with open("caesar.txt", "r") as file:
    for sor in file:
        e_m.append(sor.strip())


print()
key = elt()

d_m = ""

for sor in e_m:
    for c in sor:
        if c in betuk:
            hely = betuk.find(c)
            uj_hely = (hely - key) % 26
            uj_kar = betuk[uj_hely]
            d_m += uj_kar
        else:
            d_m += c

    print(f"Eredmény: {d_m}")
    d_m = ""
