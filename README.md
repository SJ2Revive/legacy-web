# self-leak pierwszego frontendu
Tak więc, witajcie po prawie 2 latach odkąd ten frontend powstał wiele się zmieniło tzn. 3 razy zmieniłem domene, 2 razy zmieniłem hosting itd.

głównym powodem dlaczego go leakuje to że wsumie i tak za jakiś czas przenosze się na recode ktory planuje wypusic do końca miesiąca a sama aktualna wersja jest strasznie outdated z powodow wymienonych wyzej i tego że nie aktualizowałem praktycznie od samego początku.

jeżeli chcesz się coś z tego source code'u nauczyć to prosze bardzo ale weż pod uwage to że znajdziesz tutaj kod który jest jednym wielkim security hazard'em, jest niestabilny, ma pełno złych patentów użytych.

sam frontend ma już prawie 2 lata jak wspomniałem, wtedy spędziłem około 2 tygodnie aby to wogóle jakoś działało a potem poprostu coś dodawałem, to jakieś fixy, to jakieś nowe inne zmiany itd.

generalnie dumpu sql mi sie nie chcialo ale macie tutaj strukture db jakby ktoś to chciał po coś odpalić

```sql
CREATE TABLE `LauncherSessions` (
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE `Mods` (
  `id` int NOT NULL,
  `nazwa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `longdesc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dloadlink` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `Users` (
  `user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```
niestety duża część kodu zawiera hardcoded domeny, więc może się pojawić mieszanka sj2.zndev.xyz i sj2r.zndev.pl

oczywiscie oby dwie domeny wygasly wiec do niczego was to nie poprowadzi
ZRD - 2024
