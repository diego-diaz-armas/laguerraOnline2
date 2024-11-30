2024 INSTITUTO SUPERIOR BRAZO ORIENTAL
tecnólogo REDES Y SOFTWARE, grupo TA2 PROGRAMACIÓN (PHP),
proyecto segundo semestre

criterios de evaluación:

Mínimos (7 puntos): 
Inicio de sesión de usuario con verificación de contraseña aplicando hash.
Aplicar programación orientada a objetos. Manejar las clases Jugador, Carta, Mazo, Partida. 
La clase Partida debe manejar las siguientes reglas: Un jugador juega contra una PC. 
Un jugador juega 3 rondas para ganar una partida. Una ronda equivale a tirar 3 o 5 veces cartas del mazo de CADA jugador. 

OTROS requerimientos (hasta 12 puntos): 
Desde el formulario de login se puede crear el usuario (1 punto).
Al terminar la partida se persiste el resultado (1 punto). A medida que la partida avanza se guarda el historial de la partida (1 punto). 
Desde la interfaz del usuario se pueden modificar los datos personales (1 punto). Un usuario administrador puede modificar los datos de todos los jugadores (1 punto).

La explicación del software es que es un juego de cartas basado en la guerra donde un jugador se conecta y juega con la PC.
Existen 3 vidas que se irán restando en ciclos de 3 cartas; el que saque mayor ganará y, cuando se cumpla el ciclo, se restarán vidas.
Existe un login para usuarios comunes y un login de administrador rootAdmin con contraseña 1234. El administrador puede realizar determinadas acciones sobre los jugadores, modificarlos con persistencia en base de datos MySQL y PHP orientado a objetos.
El usuario puede ver sus partidas como un historial y ver las cartas que le salieron en cada mano.
Se utiliza Bootstrap para un sencillo front.
