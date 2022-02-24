lista = []
with open("flights.csv", "r", encoding="utf-8") as file:
    for sor in file:
        adatok = sor.split(",")
        #print(adatok[3])
        if not adatok[3] in lista:
            lista.append(adatok[3])

with open("repulo_lista.txt", "w", encoding="utf-8") as file:
    for l in lista[1:]:
        file.write(l + "\n")