# SMART MONEY PROTOTYPE ONLINE
Repositorio para el curso de ***"Gestión de la configuración del software"***
en el cual se pondra en práctica las metodologias, documentación y buenas prácticas aprendidas en el presente ciclo 2021-II.
### Profesora: Lenis Rossi Wong Portillo
### Grupo 01
- Abreviatura de roles
    |JP|Jefe de Proyecto|
    |---|---|
    |DF|Desarrollador Frontend|
    |**DB**|**Desarrollador Backend**|
    |SM/DBA|Scrum Master|
    |**DS**|**Diseñador de Software**|
    |A|Arquitecto de Software|
- Integrantes del equipo:  
    |Rol|Alumno|Código|
    |---|---|---|
    |DB|Cachique Falcon, Williams Eduardo|19200272|
    |A|Caballero Leon Fredi Alexander|18200076|
    |DB|Jiminez Davila Marcelo Antonio|19200299|
    |JP|Marin Evangelista, Jorge Luis|18200275|
    |DF|Pichilingue Pimentel, Nathaly Nicole|19200247|
    |SM/DBA|Quispe Cadillo, Andres|19200289|
    |DF|Santos Rojas, Daniel Israel|19200102|
    |DF|Torre Arteaga, Alexander|19200246|
- - -
# Flujo de trabajo
1. Cada colaborador del proyecto contara con su propia rama, creada usando sus dos apellidos juntos y en minuscula.
2. El jefe del proyecto creara despues de cada clase práctica el indice del modelo compartido por la profesora a través de un archivo markdown en la rama master.  
    > Se crearan los respectivos **"issues"** en el repositorio para que todos los integrantes puedan revisar que tienen asignado y por realizar en las fechas indicadas a través de **"milestones"**.
3. Cada colaborador deberá fusionar **master** a su respectiva rama personal, para asi poder trabjar de forma colaborativa la parte que le corresponda.  
    #### Pasos por linea de comando:
    - Cambiarse a la rama master y realizar un pull para actualizarla.
        ~~~
        git switch master
        git pull origin master
        ~~~
    - Regresar a su rama de trabajo personal.
        ~~~
        git switch nombreDeSuRama
        ~~~
    - Fusionar master a su rama personal.
        ~~~
        git merge master
        ~~~
4. Por ultimo cada colaborador deberá solicitar un **"pull request"** a través de **GitHub** para fusionar su avance del trabajo en **master**.
    > Se les pide realizar **"commits"** significativos para asi evitar el spam de estos en el historial del proyecto.
- - -