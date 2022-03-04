def after_z():
    lista = []
    with open("after-z.txt", "r") as file:
        for sor in file:
            adatok = sor.strip()
            for o in adatok:
                lista.append(o)

    # szam = []
    # for i in range(0, 10):
    #     szam.append(i)
    szam = []
    for i, l in enumerate(lista):
        if l == "Z":
            for j in range(10):
                if lista[i + 1] == str(j):
                    szam.append(j)

    osz = 0
    for sz in szam:
        osz += sz

    return osz // len(szam)
