# SPK Architecture Overview

```mermaid
flowchart LR
    U[User / Mitarbeiter] --> UI[Web Frontend\nHTML, CSS, JavaScript]
    UI --> M1[Modulverwaltung\nKonten]
    UI --> M2[Kontoinhaber]
    UI --> M3[Buchungen]
    UI --> M4[Vorauszinsen]
    UI --> M5[Jahresabschluss]
    UI --> M6[Auswertungen\nPDF / Excel / Druck]

    M1 --> B1[Business Logic\nKonten- und Stammdaten]
    M2 --> B1
    M3 --> B2[Verbuchungslogik]
    M4 --> B2
    M5 --> B3[Abschluss- und\nSteuerungslogik]
    M6 --> B4[Reporting & Export]

    B1 --> D1[Data Access /\nDatenhaltung]
    B2 --> D1
    B3 --> D1
    B4 --> D1

    D1 --> S[(Datenbank /\nSystemdaten)]
    B4 --> E[PDF, Excel, Druckausgaben]
    E --> F[Externe Auswertung /\nBenutzer-Downloads]

    subgraph "SPK-System"
        UI
        M1
        M2
        M3
        M4
        M5
        M6
        B1
        B2
        B3
        B4
        D1
        S
        E
    end
```

## Overview

This architecture reflects the SPK application structure as represented in the repository:

- A browser-based frontend provides the primary user interaction layer.
- Functional modules cover core accounting workflows such as accounts, account holders, postings, accruals, year-end closing and reporting.
- Business logic coordinates data processing and validation.
- A shared data access layer persists information and supports the reporting and export functions.
- Output artifacts such as PDF and Excel reports are generated for operational and compliance use.

## Main Components

- Frontend: static HTML/CSS/JS pages for navigation and interaction
- Modules: domain-specific features for accounting and financial processing
- Business logic: rules for postings, interest, closing, and financial calculations
- Data layer: access to stored system data and related records
- Reporting: generation of printable and exportable documents
