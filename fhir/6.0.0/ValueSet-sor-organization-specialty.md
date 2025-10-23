# SorOrganizationSpecialty - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SorOrganizationSpecialty**

## ValueSet: SorOrganizationSpecialty (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/sor-organization-specialty | *Version*:6.0.0 |
| Active as of 2019-05-27 | *Computable Name*:SorOrganizationSpecialty |

 
Value set used for indicating the specialty for organizations from Sor 

 **References** 

* Included into [OrganizationSpecialty](ValueSet-ehealth-organization-specialty.md)
* Included into [PracticeSettingCodes](ValueSet-ehealth-practice-setting-codes.md)

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
  "id" : "sor-organization-specialty",
  "url" : "http://ehealth.sundhed.dk/vs/sor-organization-specialty",
  "version" : "6.0.0",
  "name" : "SorOrganizationSpecialty",
  "title" : "SorOrganizationSpecialty",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-05-27T00:00:00+00:00",
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
  "description" : "Value set used for indicating the specialty for organizations from Sor",
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
        "system" : "http://ehealth.sundhed.dk/cs/sor-organization-specialty"
      },
      {
        "system" : "http://snomed.info/sct/554471000005108/version/20150731",
        "concept" : [
          {
            "code" : "394812008",
            "display" : "Dental medicine specialties",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Dental medicine specialties"
              }
            ]
          },
          {
            "code" : "551411000005104",
            "display" : "Surgical gastroenterology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Surgical gastroenterology"
              }
            ]
          },
          {
            "code" : "554011000005107",
            "display" : "Forensic medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Forensic medicine"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "658171000005102",
            "display" : "hjemmepleje"
          },
          {
            "code" : "658161000005107",
            "display" : "hjemmesygepleje"
          },
          {
            "code" : "658151000005105",
            "display" : "sundhedsfremme og forebyggelse"
          },
          {
            "code" : "658191000005101",
            "display" : "sundhedspleje"
          },
          {
            "code" : "658201000005103",
            "display" : "kommunal tandpleje"
          },
          {
            "code" : "658141000005108",
            "display" : "genoptræning efter hospitalsophold"
          },
          {
            "code" : "658181000005104",
            "display" : "hjælpemiddelområdet"
          },
          {
            "code" : "2903041000005106",
            "display" : "det kommunale omsorgs-, social- og sundhedsområde"
          },
          {
            "code" : "394537008",
            "display" : "Pediatrics",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Pediatrics"
              }
            ]
          },
          {
            "code" : "394577000",
            "display" : "Anaesthetics",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Anaesthetics"
              }
            ]
          },
          {
            "code" : "394579002",
            "display" : "Cardiology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Cardiology"
              }
            ]
          },
          {
            "code" : "394580004",
            "display" : "Clinical genetics",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical genetics"
              }
            ]
          },
          {
            "code" : "394581000",
            "display" : "Community medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Community medicine"
              }
            ]
          },
          {
            "code" : "394582007",
            "display" : "Dermatology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Dermatology"
              }
            ]
          },
          {
            "code" : "394583002",
            "display" : "Endocrinology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Endocrinology"
              }
            ]
          },
          {
            "code" : "394584008",
            "display" : "Gastroenterology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Gastroenterology"
              }
            ]
          },
          {
            "code" : "394585009",
            "display" : "Obstetrics and gynecology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Obstetrics and gynecology"
              }
            ]
          },
          {
            "code" : "394587001",
            "display" : "Psychiatry",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Psychiatry"
              }
            ]
          },
          {
            "code" : "394588006",
            "display" : "Child and adolescent psychiatry",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Child and adolescent psychiatry"
              }
            ]
          },
          {
            "code" : "394589003",
            "display" : "Nephrology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Nephrology"
              }
            ]
          },
          {
            "code" : "394591006",
            "display" : "Neurology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Neurology"
              }
            ]
          },
          {
            "code" : "394592004",
            "display" : "Clinical oncology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical oncology"
              }
            ]
          },
          {
            "code" : "394594003",
            "display" : "Ophthalmology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Ophthalmology"
              }
            ]
          },
          {
            "code" : "394596001",
            "display" : "Chemical pathology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Chemical pathology"
              }
            ]
          },
          {
            "code" : "394600006",
            "display" : "Clinical pharmacology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical pharmacology"
              }
            ]
          },
          {
            "code" : "394601005",
            "display" : "Clinical physiology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical physiology"
              }
            ]
          },
          {
            "code" : "394603008",
            "display" : "Cardiothoracic surgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Cardiothoracic surgery"
              }
            ]
          },
          {
            "code" : "394604002",
            "display" : "Ear, nose and throat surgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Ear, nose and throat surgery"
              }
            ]
          },
          {
            "code" : "394605001",
            "display" : "Oral surgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Oral surgery"
              }
            ]
          },
          {
            "code" : "394608004",
            "display" : "Orthodontics",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Orthodontics"
              }
            ]
          },
          {
            "code" : "394609007",
            "display" : "General surgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "General surgery"
              }
            ]
          },
          {
            "code" : "394610002",
            "display" : "Neurosurgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Neurosurgery"
              }
            ]
          },
          {
            "code" : "394611003",
            "display" : "Plastic surgery - specialty",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Plastic surgery - specialty"
              }
            ]
          },
          {
            "code" : "394612005",
            "display" : "Urology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Urology"
              }
            ]
          },
          {
            "code" : "394801008",
            "display" : "Trauma and orthopedics",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Trauma and orthopedics"
              }
            ]
          },
          {
            "code" : "394803006",
            "display" : "Clinical hematology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical hematology"
              }
            ]
          },
          {
            "code" : "394805004",
            "display" : "Clinical immunology/allergy",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical immunology/allergy"
              }
            ]
          },
          {
            "code" : "394807007",
            "display" : "Infectious diseases (specialty)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Infectious diseases (specialty)"
              }
            ]
          },
          {
            "code" : "394809005",
            "display" : "Clinical neuro-physiology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical neuro-physiology"
              }
            ]
          },
          {
            "code" : "394810000",
            "display" : "Rheumatology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Rheumatology"
              }
            ]
          },
          {
            "code" : "394811001",
            "display" : "Geriatric medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Geriatric medicine"
              }
            ]
          },
          {
            "code" : "394821009",
            "display" : "Occupational medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Occupational medicine"
              }
            ]
          },
          {
            "code" : "394914008",
            "display" : "Radiology - speciality",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Radiology - speciality"
              }
            ]
          },
          {
            "code" : "394915009",
            "display" : "General pathology (speciality)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "General pathology (speciality)"
              }
            ]
          },
          {
            "code" : "408443003",
            "display" : "General medical practice",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "General medical practice"
              }
            ]
          },
          {
            "code" : "408448007",
            "display" : "Tropical medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Tropical medicine"
              }
            ]
          },
          {
            "code" : "408454008",
            "display" : "Clinical microbiology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Clinical microbiology"
              }
            ]
          },
          {
            "code" : "408463005",
            "display" : "Vascular surgery",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Vascular surgery"
              }
            ]
          },
          {
            "code" : "408472002",
            "display" : "Hepatology",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Hepatology"
              }
            ]
          },
          {
            "code" : "418112009",
            "display" : "Pulmonary medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Pulmonary medicine"
              }
            ]
          },
          {
            "code" : "419192003",
            "display" : "Internal medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Internal medicine"
              }
            ]
          },
          {
            "code" : "421661004",
            "display" : "Blood banking and transfusion medicine (specialty)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Blood banking and transfusion medicine (specialty)"
              }
            ]
          },
          {
            "code" : "773568002",
            "display" : "Emergency medicine",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Emergency medicine"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
