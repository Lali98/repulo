def fibonacci():
    szam = [0, 1]

    for i in range(49):
        szam.append(szam[i] + szam[i + 1])

    print(szam[-1])
    legm = str(szam[-1])

    lista = [int(legm[0]), int(legm[-1])]
    print(lista)
    return lista[1] - lista[0]
