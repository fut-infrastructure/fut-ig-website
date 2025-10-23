# DK_IHE_HealthcareFacilityTypeCode_VS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_HealthcareFacilityTypeCode_VS**

## ValueSet: DK_IHE_HealthcareFacilityTypeCode_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-healthcarefacilitytypecode-vs | *Version*:6.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_HealthcareFacilityTypeCode_VS |

 
Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dk-ihe-healthcarefacilitytypecode-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-healthcarefacilitytypecode-vs",
  "version" : "6.0.0",
  "name" : "DK_IHE_HealthcareFacilityTypeCode_VS",
  "title" : "DK_IHE_HealthcareFacilityTypeCode_VS",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-11T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Allowed value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "557511000005107",
            "display" : "akupunkturklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "akupunkturklinik"
              }
            ]
          },
          {
            "code" : "550871000005101",
            "display" : "akutmodtageenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "akutmodtageenhed"
              }
            ]
          },
          {
            "code" : "394761003",
            "display" : "almen lægepraksis",
            "designation" : [
              {
                "language" : "da",
                "value" : "almen lægepraksis"
              }
            ]
          },
          {
            "code" : "264372000",
            "display" : "apotek",
            "designation" : [
              {
                "language" : "da",
                "value" : "apotek"
              }
            ]
          },
          {
            "code" : "557501000005109",
            "display" : "apoteksfilial",
            "designation" : [
              {
                "language" : "da",
                "value" : "apoteksfilial"
              }
            ]
          },
          {
            "code" : "554851000005102",
            "display" : "asylcenter",
            "designation" : [
              {
                "language" : "da",
                "value" : "asylcenter"
              }
            ]
          },
          {
            "code" : "557531000005103",
            "display" : "bandagistklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "bandagistklinik"
              }
            ]
          },
          {
            "code" : "20078004",
            "display" : "behandlingscenter for stofmisbrugere",
            "designation" : [
              {
                "language" : "da",
                "value" : "behandlingscenter for stofmisbrugere"
              }
            ]
          },
          {
            "code" : "722173008",
            "display" : "behandlingsenhed i fængsel eller arresthus",
            "designation" : [
              {
                "language" : "da",
                "value" : "behandlingsenhed i fængsel eller arresthus"
              }
            ]
          },
          {
            "code" : "309964003",
            "display" : "billeddiagnostisk enhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "billeddiagnostisk enhed\n"
              }
            ]
          },
          {
            "code" : "554221000005108",
            "display" : "bosted",
            "designation" : [
              {
                "language" : "da",
                "value" : "bosted"
              }
            ]
          },
          {
            "code" : "56781000005109",
            "display" : "center for misbrugsbehandling",
            "designation" : [
              {
                "language" : "da",
                "value" : "center for misbrugsbehandling"
              }
            ]
          },
          {
            "code" : "557881000005104",
            "display" : "COVID-19-testenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "COVID-19-testenhed"
              }
            ]
          },
          {
            "code" : "554031000005103",
            "display" : "diætistklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "diætistklinik"
              }
            ]
          },
          {
            "code" : "557891000005101",
            "display" : "enhed for aktivitetstilbud",
            "designation" : [
              {
                "language" : "da",
                "value" : "enhed for aktivitetstilbud"
              }
            ]
          },
          {
            "code" : "546821000005103",
            "display" : "ergoterapiklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "ergoterapiklinik"
              }
            ]
          },
          {
            "code" : "702871004",
            "display" : "fertilitetsklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "fertilitetsklinik"
              }
            ]
          },
          {
            "code" : "554061000005105",
            "display" : "statsautoriseret fodterapeut (snomed:  fodterapeutklinik)",
            "designation" : [
              {
                "language" : "da",
                "value" : "statsautoriseret fodterapeut (snomed:  fodterapeutklinik)"
              }
            ]
          },
          {
            "code" : "557901000005102",
            "display" : "forebyggende hjemmebesøgsenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "forebyggende hjemmebesøgsenhed"
              }
            ]
          },
          {
            "code" : "550861000005106",
            "display" : "fysioterapi- og ergoterapiklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "fysioterapi- og ergoterapiklinik"
              }
            ]
          },
          {
            "code" : "547011000005103",
            "display" : "fysioterapiklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "fysioterapiklinik"
              }
            ]
          },
          {
            "code" : "546811000005109",
            "display" : "genoptræningscenter (snomed: rehabiliteringscenter)",
            "designation" : [
              {
                "language" : "da",
                "value" : "genoptræningscenter (snomed: rehabiliteringscenter)"
              }
            ]
          },
          {
            "code" : "554881000005108",
            "display" : "handicap- og psykiatrienhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "handicap- og psykiatrienhed"
              }
            ]
          },
          {
            "code" : "554861000005100",
            "display" : "handicapenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "handicapenhed"
              }
            ]
          },
          {
            "code" : "554821000005109",
            "display" : "hjemmeplejeenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "hjemmeplejeenhed"
              }
            ]
          },
          {
            "code" : "550621000005101",
            "display" : "hjemmesygepleje",
            "designation" : [
              {
                "language" : "da",
                "value" : "hjemmesygepleje"
              }
            ]
          },
          {
            "code" : "284546000",
            "display" : "hospice",
            "designation" : [
              {
                "language" : "da",
                "value" : "hospice"
              }
            ]
          },
          {
            "code" : "22232009",
            "display" : "hospital",
            "designation" : [
              {
                "language" : "da",
                "value" : "hospital"
              }
            ]
          },
          {
            "code" : "702824005",
            "display" : "hørecenter",
            "designation" : [
              {
                "language" : "da",
                "value" : "hørecenter"
              }
            ]
          },
          {
            "code" : "309904001",
            "display" : "intensivenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "intensivenhed"
              }
            ]
          },
          {
            "code" : "557591000005104",
            "display" : "internetbaseret sundhedsydelse",
            "designation" : [
              {
                "language" : "da",
                "value" : "internetbaseret sundhedsydelse"
              }
            ]
          },
          {
            "code" : "554411000005101",
            "display" : "jobcenter",
            "designation" : [
              {
                "language" : "da",
                "value" : "jobcenter"
              }
            ]
          },
          {
            "code" : "550631000005103",
            "display" : "jordemoderklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "jordemoderklinik"
              }
            ]
          },
          {
            "code" : "550641000005106",
            "display" : "kiropraktor klinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "kiropraktor klinik"
              }
            ]
          },
          {
            "code" : "557521000005101",
            "display" : "klinik for alternativ behandling",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinik for alternativ behandling"
              }
            ]
          },
          {
            "code" : "550851000005109",
            "display" : "klinisk enhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk enhed"
              }
            ]
          },
          {
            "code" : "547211000005108",
            "display" : "kommune",
            "designation" : [
              {
                "language" : "da",
                "value" : "kommune"
              }
            ]
          },
          {
            "code" : "557561000005105",
            "display" : "konsulentvirksomhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "konsulentvirksomhed"
              }
            ]
          },
          {
            "code" : "557541000005106",
            "display" : "kosmetisk klinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "kosmetisk klinik"
              }
            ]
          },
          {
            "code" : "550651000005108",
            "display" : "lægelaboratorium",
            "designation" : [
              {
                "language" : "da",
                "value" : "lægelaboratorium"
              }
            ]
          },
          {
            "code" : "550661000005105",
            "display" : "lægevagt",
            "designation" : [
              {
                "language" : "da",
                "value" : "lægevagt"
              }
            ]
          },
          {
            "code" : "551611000005102",
            "display" : "operationsgang",
            "designation" : [
              {
                "language" : "da",
                "value" : "operationsgang"
              }
            ]
          },
          {
            "code" : "557581000005102",
            "display" : "optikervirksomhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "optikervirksomhed"
              }
            ]
          },
          {
            "code" : "557671000005101",
            "display" : "osteopatiklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "osteopatiklinik"
              }
            ]
          },
          {
            "code" : "309939001",
            "display" : "palliativ enhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "palliativ enhed"
              }
            ]
          },
          {
            "code" : "42665001",
            "display" : "plejehjem",
            "designation" : [
              {
                "language" : "da",
                "value" : "plejehjem"
              }
            ]
          },
          {
            "code" : "550891000005100",
            "display" : "privat",
            "designation" : [
              {
                "language" : "da",
                "value" : "privat"
              }
            ]
          },
          {
            "code" : "554211000005102",
            "display" : "præhospitals enhed (snomed:  præhospitalsenhed)",
            "designation" : [
              {
                "language" : "da",
                "value" : "præhospitals enhed (snomed:  præhospitalsenhed)"
              }
            ]
          },
          {
            "code" : "554871000005105",
            "display" : "psykiatrienhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "psykiatrienhed"
              }
            ]
          },
          {
            "code" : "550711000005101",
            "display" : "psykologisk rådgivningsklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "psykologisk rådgivningsklinik"
              }
            ]
          },
          {
            "code" : "556841000005105",
            "display" : "pædagogisk psykologisk rådgivning (PPR)",
            "designation" : [
              {
                "language" : "da",
                "value" : "pædagogisk psykologisk rådgivning (PPR)"
              }
            ]
          },
          {
            "code" : "702916001",
            "display" : "rehabiliteringsenhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "rehabiliteringsenhed"
              }
            ]
          },
          {
            "code" : "225728007",
            "display" : "skadestue",
            "designation" : [
              {
                "language" : "da",
                "value" : "skadestue"
              }
            ]
          },
          {
            "code" : "550671000005100",
            "display" : "speciallægepraksis",
            "designation" : [
              {
                "language" : "da",
                "value" : "speciallægepraksis"
              }
            ]
          },
          {
            "code" : "264361005",
            "display" : "sundhedscenter",
            "designation" : [
              {
                "language" : "da",
                "value" : "sundhedscenter"
              }
            ]
          },
          {
            "code" : "554041000005106",
            "display" : "sundhedsforvaltning",
            "designation" : [
              {
                "language" : "da",
                "value" : "sundhedsforvaltning"
              }
            ]
          },
          {
            "code" : "554021000005101",
            "display" : "sundhedspleje",
            "designation" : [
              {
                "language" : "da",
                "value" : "sundhedspleje"
              }
            ]
          },
          {
            "code" : "554071000005100",
            "display" : "sygehusapotek",
            "designation" : [
              {
                "language" : "da",
                "value" : "sygehusapotek"
              }
            ]
          },
          {
            "code" : "703069008",
            "display" : "sygeplejeklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "sygeplejeklinik"
              }
            ]
          },
          {
            "code" : "550681000005102",
            "display" : "tandlægepraksis",
            "designation" : [
              {
                "language" : "da",
                "value" : "tandlægepraksis"
              }
            ]
          },
          {
            "code" : "550691000005104",
            "display" : "tandpleje klinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "tandpleje klinik"
              }
            ]
          },
          {
            "code" : "550701000005104",
            "display" : "tandteknisk klinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "tandteknisk klinik"
              }
            ]
          },
          {
            "code" : "554231000005106",
            "display" : "vaccinationsklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "vaccinationsklinik"
              }
            ]
          },
          {
            "code" : "554051000005108",
            "display" : "zoneterapiklinik",
            "designation" : [
              {
                "language" : "da",
                "value" : "zoneterapiklinik"
              }
            ]
          },
          {
            "code" : "550811000005108",
            "display" : "administrativ enhed",
            "designation" : [
              {
                "language" : "da",
                "value" : "administrativ enhed"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
