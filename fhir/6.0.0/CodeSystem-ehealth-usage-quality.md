# Usage Quality - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Quality**

## CodeSystem: Usage Quality 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/usage-quality | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:UsageQuality |

 
Quality codes for usage or operating of measuring device 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UsageQuality](ValueSet-ehealth-usage-quality.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-usage-quality",
  "url" : "http://ehealth.sundhed.dk/cs/usage-quality",
  "version" : "6.0.0",
  "name" : "UsageQuality",
  "title" : "Usage Quality",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Quality codes for usage or operating of measuring device",
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
  "caseSensitive" : true,
  "content" : "complete",
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "none",
      "display" : "No quality needed",
      "definition" : "Quality value where no derivation rule logic nor values are expected",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ingen betjeningskvalitet krævet/ventet"
        }
      ],
      "concept" : [
        {
          "code" : "unknown",
          "display" : "Unknown quality",
          "definition" : "Unknown quality (Unlikely to be adequate if a quality value is expected)",
          "designation" : [
            {
              "language" : "da",
              "value" : "Ukendt betjeningskvalitet"
            }
          ],
          "concept" : [
            {
              "code" : "derivation-error",
              "display" : "Error in deriving or determining the quality",
              "definition" : "Quality value could not be derived due to insufficient input, unknown/unavailable logic, or other error",
              "designation" : [
                {
                  "language" : "da",
                  "value" : "Betjeningskvaliteten kunne ikke bestemmes grundet manglende input, utilgængelig logik, eller anden fejl."
                }
              ],
              "concept" : [
                {
                  "code" : "normal",
                  "display" : "Normal/neutral usage quality",
                  "definition" : "Normal/neutral usage quality",
                  "designation" : [
                    {
                      "language" : "da",
                      "value" : "Normal eller neutral betjeningskvalitet"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "instructions-followed",
                      "display" : "Performed in accordance with instructions",
                      "definition" : "Performed in accordance with instructions",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Brugsvejledning fulgt"
                        }
                      ]
                    },
                    {
                      "code" : "instructions-not-followed",
                      "display" : "Performed without following instructions",
                      "definition" : "Performed without following instructions",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Brugsvejledning ej fulgt"
                        }
                      ]
                    },
                    {
                      "code" : "entered-manually",
                      "display" : "Manually entered measurement",
                      "definition" : "Manually entered measurement",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Manuelt indtastet måling"
                        }
                      ]
                    },
                    {
                      "code" : "automatically-transferred",
                      "display" : "Automatically transferred measurement",
                      "definition" : "Automatically transferred measurement",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Automatisk overført måling"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "TBD2",
      "display" : "Example value2 - Under construction",
      "definition" : "Example value2 - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    }
  ]
}

```
