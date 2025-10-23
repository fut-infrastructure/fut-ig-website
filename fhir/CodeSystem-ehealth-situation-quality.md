# Situation Quality - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Situation Quality**

## CodeSystem: Situation Quality 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/situation-quality | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:SituationQuality |

 
Codes stating the quality of a measurement situation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SituationQuality](ValueSet-ehealth-situation-quality.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-situation-quality",
  "url" : "http://ehealth.sundhed.dk/cs/situation-quality",
  "version" : "6.0.0",
  "name" : "SituationQuality",
  "title" : "Situation Quality",
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
  "description" : "Codes stating the quality of a measurement situation",
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
  "hierarchyMeaning" : "is-a",
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
          "value" : "Ingen situationskvalitet krævet/ventet"
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
              "value" : "Ukendt situationskvalitet"
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
                  "value" : "Situationskvaliteten kunne ikke bestemmes grundet manglende input, utilgængelig logik, eller anden fejl."
                }
              ],
              "concept" : [
                {
                  "code" : "normal",
                  "display" : "Normal/neutral situation quality",
                  "definition" : "Normal/neutral situation quality",
                  "designation" : [
                    {
                      "language" : "da",
                      "value" : "Normalt/neutralt situationskvalitetsniveau"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "finger-not-cold",
                      "display" : "Finger is not cold",
                      "definition" : "Finger is not cold",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Finger ej kold"
                        }
                      ]
                    },
                    {
                      "code" : "supported-by-armrest",
                      "display" : "Performed with armrest support",
                      "definition" : "Performed with armrest support",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Udført med støtte fra armlæn"
                        }
                      ]
                    },
                    {
                      "code" : "arms-crossed",
                      "display" : "Performed with arms crossed",
                      "definition" : "Performed with arms crossed",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "udført med korslagte arme"
                        }
                      ]
                    },
                    {
                      "code" : "lying-down",
                      "display" : "Performed lying down",
                      "definition" : "Performed lying down",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Udført liggende"
                        }
                      ]
                    },
                    {
                      "code" : "sitting",
                      "display" : "Performed sitting",
                      "definition" : "Performed sitting",
                      "designation" : [
                        {
                          "language" : "da",
                          "value" : "Udført siddende"
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
      "code" : "Unknown",
      "display" : "Unknown quality",
      "definition" : "Unknown quality (Unlikely to be adequate if a quality value is expected)",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ],
      "concept" : [
        {
          "code" : "None",
          "display" : "No quality needed",
          "definition" : "Quality value where no derivation rule logic nor values are expected",
          "property" : [
            {
              "code" : "deprecated",
              "valueDateTime" : "2020-02-03"
            }
          ],
          "concept" : [
            {
              "code" : "DerivationError",
              "display" : "Error in deriving or determining the quality",
              "definition" : "Quality value could not be derived due to insufficient input, unknown/unavailable logic, or other error",
              "property" : [
                {
                  "code" : "deprecated",
                  "valueDateTime" : "2020-02-03"
                }
              ],
              "concept" : [
                {
                  "code" : "SQ1",
                  "display" : "Situation quality 1 (example)",
                  "definition" : "Example, needs further clarification.",
                  "property" : [
                    {
                      "code" : "deprecated",
                      "valueDateTime" : "2020-02-03"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "SQ2",
                      "display" : "Situation quality 2 (example)",
                      "definition" : "Example, needs further clarification.",
                      "property" : [
                        {
                          "code" : "deprecated",
                          "valueDateTime" : "2020-02-03"
                        }
                      ],
                      "concept" : [
                        {
                          "code" : "SQ3",
                          "display" : "Situation quality 3 (example)",
                          "definition" : "Example, needs further clarification.",
                          "property" : [
                            {
                              "code" : "deprecated",
                              "valueDateTime" : "2020-02-03"
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
        }
      ]
    }
  ]
}

```
