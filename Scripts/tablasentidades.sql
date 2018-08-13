CREATE DATABASE dbd

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    id_rol integer NOT NULL,
    email character varying(64) NOT NULL,
    nombre_usuario character varying(16),
    contrasena_usuario character varying(16),
    fondos_usuario money,
    PRIMARY KEY (id_servicio), 
    FOREIGN KEY (id_rol) REFERENCES rol(id_rol)
);

CREATE TABLE rol (
    id_rol integer NOT NULL,
    tipo_rol character varying(16),
    permisos_rol character varying(32),
    PRIMARY KEY (id_rol)
);

CREATE TABLE historial_sistema (
    id_historial integer NOT NULL,
    id_usuario integer NOT NULL,
    accion_historial character varying(32),
    valor_inicial_historial character varying(32),
    valor_final_historial character varying(32),
    descripcion_historial character varying(255),
    PRIMARY KEY(id_historial),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE servicio (
    id_servicio integer NOT NULL,
    id_reserva integer NOT NULL,
    id_pas integer NOT NULL,
    id_actividad integer NOT NULL,
    id_traslado integer NOT NULL,
    fecha_hora_servicio datetime,
    precio money,
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva),
    FOREIGN KEY (id_pas) REFERENCES pasaje(id_pasaje),
    FOREIGN KEY (id_actividad) REFERENCES actividad(id_actividad),
    FOREIGN KEY (id_traslado) REFERENCES traslado(id_traslado),
    PRIMARY KEY (id_servicio)
);

CREATE TABLE detalle (
    id_detalle integer NOT NULL,
    producto_detalle character varying(255),
    cantidad integer,
    subtotal integer,
    descuento integer,
    total integer,
    metodo_pago character varying(32),
    fecha_compra datetime,
    PRIMARY KEY (id_detalle)
);

CREATE TABLE reserva (
    id_reserva integer NOT NULL,
    fecha_entrada_reserva datetime,
    fecha_salida_reserva datetime,
    cantidad_habitaciones_reserva integer,
    cantidad_personas_reserva integer,
    PRIMARY KEY (id_reserva)
);

CREATE TABLE habitacion (
    id_habitacion integer NOT NULL,
    tipo_habitacion character varying(32),
    capacidad_habitacion integer,
    disponibilidad_habitacion boolean,
    descripcion_habitacion character varying(255),
    PRIMARY KEY (id_habitacion)
);

CREATE TABLE hotel (
    id_hotel integer NOT NULL,
    ciudad_hotel character varying(255),
    numero_habitaciones_hotel integer,
    nombre_hotel character varying(255),
    descripcion_hotel character varying(255),
    calificacion_hotel double precision,
    estrellas_hotel integer,
    PRIMARY KEY (id_hotel)
);

CREATE TABLE pasaje (
    id_pasaje integer NOT NULL,
    clase_pasaje character varying(255),
    asiento_pasaje character varying(255),
    fecha_salida_pasaje datetime,
    fecha_llegada_pasaje datetime,
    id_paquetehotel integer NOT NULL,
    id_paqueteAuto integer NOT NULL,
    FOREIGN KEY(id_paquetehotel),
    FOREIGN KEY (id_paqueteAuto),
    PRIMARY KEY (id_pasaje)
);  

CREATE TABLE vuelo (
    id_vuelo integer,
    tiempo_viaje datetime,
    aerolinea character varying(255),
    PRIMARY KEY (id_vuelo)
);

CREATE TABLE avion (
    id_avion int NOT NULL,
    nombre_avion varchar(255),
    cantidad_asientos integer,
    capacidad_equipaje double precision,
    descripcion character varying(255),
    asiento_pc integer,
    asientos_tur integer,
    asientos_ejec integer,
    PRIMARY KEY (id_avion)
);

CREATE TABLE auto (
    id_auto integer NOT NULL,
    patente_auto character varying(255),
    nombre_compania character varying(255),
    fecha_arriendo datetime,
    fecha_devolucion datetime,
    PRIMARY KEY (id_auto)
);

CREATE TABLE asiento (
    id_asiento integer NOT NULL,
    disponibilidad boolean,
    tipo varchar(255),
    fila integer,
    posicion char
    PRIMARY KEY (id_asiento) 
);

CREATE TABLE traslado (
    id_traslado integer NOT NULL,
    nombre_hotel varchar(32),
    aeropuerto varchar(32),
    sentido_traslado boolean,
    fecha_traslado datetime,
    cantidad_personas integer,
    PRIMARY KEY (id_traslado)
);

CREATE TABLE actividad (
    id_actividad integer NOT NULL,
    fecha_actividad datetime,
    descripcion character varying(255),
    ciudad character varying(64),
    cantidad_menores integer,
    cantidad_mayores integer,
    informacion_adicional character varying(255),
    PRIMARY KEY (id_actividad)
);

CREATE TABLE paquete_hotel (
    id_paquete int NOT NULL,
    cantidad_habitaciones integer,
    cantidad_personas integer,
    PRIMARY KEY (id_paquete)
);

CREATE TABLE paquete_auto (
    id_paqueteAuto int NOT NULL,
    cantidad_personas int,
    ciudad_recogida character varying(64),
    PRIMARY KEY (id_paqueteAuto)
);
